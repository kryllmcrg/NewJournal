<?php

namespace App\Controllers;

use App\Models\UsersModel;

class User extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function home()
    {
        return view('UserPage/home');
    }

    public function login()
    {
        return view('UserPage/login');
    }

    public function authenticate()
    {
        // Get input data from the form
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        // Validate input (add more validation as needed)
        $validationRules = [
            'email' => 'required|valid_email',
            'password' => 'required',
        ];
    
        if (!$this->validate($validationRules)) {
            // If validation fails, redirect back to the login page with validation errors
            return redirect()->to('/login')->withInput()->with('validation', $this->validator);
        }
    
        $usersModel = new UsersModel();
        $user = $usersModel->where('email', $email)->first();
    
        if ($user && password_verify($password, $user['password'])) {
            // Get the user's role
            $role = $user['role'];
    
            // Store the role in session or use it as needed
            session()->set('role', $role);
    
            // Redirect based on role
            switch ($role) {
                case 'admin':
                    return redirect()->to('/dashboard');
                case 'staff':
                    return redirect()->to('StaffPage/dashboard');
                default:
                    return redirect()->to('UserPage/home');
            }
        } else {
            return redirect()->to('/login')->with('error', 'Invalid credentials');
        }
    }
    

    public function register()
    {
        return view('UserPage/register');
    }

    public function save()
    {
        $userModel = new UsersModel();

        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'email'      => $this->request->getPost('email'),
            'username'   => $this->request->getPost('username'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'       => 'user', // Set default role to 'user'
        ];

        $userModel->insert($data);

        return redirect()->to('/login')->with('success', 'Registration successful! You can now log in.');
    }

    public function dashboard()
    {
        return view('AdminPage/dashboard');
    }
}
