<?php

namespace App\Controllers;

use App\Models\UsersModel;

class UserController extends BaseController
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
        // Load necessary helpers and libraries
        helper(['form']);
        $session = session();
    
        // Check if the form is submitted
        if ($this->request->getMethod() === 'post') {
            // Validate form input
            $rules = [
                'email'    => 'required|valid_email',
                'password' => 'required|min_length[6]'
            ];
    
            if ($this->validate($rules)) {
                // Get input data
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');
    
                // Check if user exists in the database
                $userModel = new UsersModel();
                $user = $userModel->where('email', $email)->first();
    
                if ($user) {
                    // Verify password
                    if (password_verify($password, $user['password'])) {
                        // Set session data
                        $session->set([
                            'user_id' => $user['id'],
                            'email' => $user['email'],
                            'logged_in' => true
                        ]);
    
                        // Redirect to appropriate dashboard
                        switch ($user['role']) {
                            case 'admin':
                                return redirect()->to('/AdminPage/dashboard');
                            case 'staff':
                                return redirect()->to('/AdminPage/dashboard');
                            default:
                                return redirect()->to('/UserPage');
                        }
                    }
                }
                // Invalid credentials
                return redirect()->back()->withInput()->with('error', 'Invalid email or password');
            } else {
                // Validation errors
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
        }
        // Load the login view
        return view('UserPage/login');
    }
    
    public function logout()
    {
        // Destroy session
        $session = session();
        $session->destroy();

        // Redirect to login page
        return redirect()->to('/login');
    }   

    public function register()
    {
        return view('UserPage/register');
    }

    public function store()
    {
        // Load the validation library
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        // Set validation rules with custom error messages
        $validation->setRules([
            'first_name' => 'required',
            'email' => 'required|valid_email',
            'username' => 'required|is_unique[users.username]',
            'password' => 'required|min_length[6]',
            'role' => 'required',
            'profile_image' => 'uploaded[profile_image]|is_image[profile_image]|max_size[profile_image,4096]' // 4096 KB = 4 MB
        ]);
        

        // Check if validation passes
        if (!$validation->withRequest($this->request)->run()) {
            // If validation fails, return back to the registration form with errors
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Handle file upload
        $profileImage = $this->request->getFile('profile_image');

        // Check if a profile image was uploaded
        if ($profileImage->isValid() && !$profileImage->hasMoved()) {
            // Move the uploaded file to the desired directory
            $profileImage->move(ROOTPATH . 'public/uploads');

            // Create a new user record in the database
            $userModel = new UsersModel();
            $userModel->save([
                'first_name' => $this->request->getPost('first_name'),
                'email'      => $this->request->getPost('email'),
                'username'   => $this->request->getPost('username'),
                'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hash the password
                'role'       => $this->request->getPost('role'),
                'profile_image' => $profileImage->getName()
            ]);

            // Redirect to login page
            return redirect()->to('login')->with('success', 'Registration successful. Please log in.');
        } else {
            // If file upload fails, return back to the registration form with an error
            return redirect()->back()->withInput()->with('error', 'Failed to upload profile image.');
        }
    }  
    public function about()
    {
        return view('UserPage/about');
    }

    public function contact()
    {
        return view('UserPage/contact');
    }

    public function news()
    {
        return view('UserPage/news');
    }

    public function announcements()
    {
        return view('UserPage/announcements');
    }
}
