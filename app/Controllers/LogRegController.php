<?php

namespace App\Controllers;
use App\Models\UsersModel;
use App\Models\UserAccountsModel;

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

            $usersModel = new UserAccountsModel();
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
                'image' => $user['image'],
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
        try {
            // Load the validation library
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        // Set validation rules with custom error messages
        $validation->setRules([

            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'username' => 'required|is_unique[users.username]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
            'contact_number' => 'required',
            'image' => 'uploaded[image]|is_image[image]|max_size[image,4096]',
            'gender' => 'required',
            'role' => 'required',
            'date_of_birth' => 'required',
            'civil_status' => 'required'
        ]);
        

        // Check if validation passes
        if (!$validation->withRequest($this->request)->run()) {
            // If validation fails, return back to the registration form with errors
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Handle file upload
        $profileImage = $this->request->getFile('image');
        $newName = $profileImage->getRandomName();

        // Check if a profile image was uploaded
        if ($profileImage->isValid() && !$profileImage->hasMoved()) {
            // Move the uploaded file to the desired directory
            $profileImage->move(ROOTPATH . 'public/uploads'.$newName);

            // Create a new user record in the database
            $userModel = new UserAccountsModel();
            $userModel->save([
                'firstname' => $this->request->getPost('firstname'),
                'middlename' => $this->request->getPost('middlename'),
                'lastname' => $this->request->getPost('lastname'),
                'address' => $this->request->getPost('address'),
                'username'   => $this->request->getPost('username'),
                'email'      => $this->request->getPost('email'),
                'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'contact_number' => $this->request->getPost('contact_number'),
                'image' => $newName,
                'role' => $this->request->getPost('role'),
                'gender' => $this->request->getPost('gender'),
                'date_of_birth' => $this->request->getPost('date_of_birth'),
                'civil_status' => $this->request->getPost('civil_status'),
            ]);
        } else {
            // If file upload fails, return back to the registration form with an error
            return redirect()->to('login')->with('error', 'Failed to upload profile image.');
        }
        } catch (\Throwable $th) {
            return redirect()->to('dashboard')->with('error', 'Failed to upload profile image.');
        }
    } 
}
