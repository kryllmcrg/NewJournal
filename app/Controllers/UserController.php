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
            'first_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The first name field is required.'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'The email field is required.',
                    'valid_email' => 'Please enter a valid email address.'
                ]
            ],
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => 'The username field is required.',
                    'is_unique' => 'The username is already taken.'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'The password field is required.',
                    'min_length' => 'The password must be at least 6 characters long.'
                ]
            ],
            'role' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The role field is required.'
                ]
            ],
            'profile_image' => [
                'rules' => 'uploaded[profile_image]|max_size[profile_image,1024]|is_image[profile_image]',
                'errors' => [
                    'uploaded' => 'Please upload a profile image.',
                    'max_size' => 'The profile image size must not exceed 1MB.',
                    'is_image' => 'Please upload a valid image file.'
                ]
            ]
        ]);
    
        // Check if validation passes
        if (!$validation->withRequest($this->request)->run()) {
            // If validation fails, return back to the registration form with errors
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
    
        // Handle file upload
        $profileImage = $this->request->getFile('profile_image');
        $profileImage->move(ROOTPATH . 'public/uploads');
    
        // Create a new user record in the database
        $userModel = new UsersModel();
        $userModel->save([
            'first_name' => $this->request->getPost('first_name'),
            'email'      => $this->request->getPost('email'),
            'username'   => $this->request->getPost('username'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'       => $this->request->getPost('role'),
            'profile_image' => $profileImage->getName()
        ]);
    
        // Redirect to login page
        return redirect()->to('login')->with('success', 'Registration successful. Please log in.');
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
