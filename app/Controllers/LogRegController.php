<?php

namespace App\Controllers;
use App\Models\UsersModel;

class LogRegController extends BaseController
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

    public function loginAuth()
    {
        $session = session();
        try {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $usersModel = new UsersModel();
            $user = $usersModel->where('email', $email)->first();

            // Check if user exists
            if (is_null($user)) {
                return redirect()->to(previous_url())->withInput()->with('error', 'Invalid email or password.');
            }

            // Verify password
            if (!password_verify($password, $user['password'])) {
                return redirect()->to(previous_url())->withInput()->with('error', 'Invalid email or password.');
            }
            $ses_user= [
                'id' => $user['id'],
                'email' => $user['email'],
                'role' => $user['role'],
                'profile_image' => $user['profile_image'],
                'fullname' => $user['firstname'].' '. $user['lastname']
            ];
            $session->set($ses_user);
            return redirect()->to('/dashboard');

        } catch (\Throwable $th) {
            // Handle any unexpected errors
            return redirect()->to(site_url('login'))->with('error', 'An error occurred during authentication.');
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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|valid_email',
            'username' => 'required|is_unique[users.username]',
            'address' => 'required',
            'gender' => 'required',
            'mobilePhone' => 'required',
            'password' => 'required|min_length[6]',
            'profile_image' => 'uploaded[profile_image]|is_image[profile_image]|max_size[profile_image,4096]',
            'role' => 'required'
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
                'firstname' => $this->request->getPost('firstname'),
                'lastname' => $this->request->getPost('lastname'),
                'email'      => $this->request->getPost('email'),
                'username'   => $this->request->getPost('username'),
                'address' => $this->request->getPost('address'),
                'gender' => $this->request->getPost('gender'),
                'mobilePhone' => $this->request->getPost('mobilePhone'),
                'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'profile_image' => $profileImage->getName(),
                'role' => $this->request->getPost('role')
            ]);

            // Redirect to login page
            return redirect()->to('login')->with('success', 'Registration successful. Please log in.');
        } else {
            // If file upload fails, return back to the registration form with an error
            return redirect()->back()->withInput()->with('error', 'Failed to upload profile image.');
        }
    }  
}
