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
        try {
            $email = $this->request->getVar('email'); // Assuming 'Email' is equivalent to 'username'
            $password = $this->request->getVar('password');

            $accountModel = new UsersModel();
            $user = $accountModel->where('email', $email)->first();

            // Check if user exists
            if (is_null($user)) {
                return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
            }

            // Verify password
            if (!password_verify($password, $user['password'])) {
                return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
            }

            // Redirect based on user role
            switch ($user['role']) {
                case 'admin':
                    return redirect()->to('AdminPage/dashboard');
                case 'user':
                    return redirect()->to('UserPage/ /');
                default:
                    // If role is not defined, redirect to some default page
                    return redirect()->to('login')->with('error', 'Invalid user role.');
            }
        } catch (\Throwable $th) {
            // Handle any unexpected errors
            return redirect()->to('login')->with('error', 'An error occurred during authentication.');
        }
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
            'fullname' => 'required',
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
                'fullname' => $this->request->getPost('fullname'),
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
