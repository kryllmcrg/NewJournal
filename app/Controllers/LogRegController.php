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

    // public function store()
    // {
    //     try {
    //         // Load the validation library
    //     helper(['form', 'url']);
    //     $validation = \Config\Services::validation();

    //     // Set validation rules with custom error messages
    //     $validation->setRules([

    //         'firstname' => 'required',
    //         'middlename' => 'required',
    //         'lastname' => 'required',
    //         'address' => 'required',
    //         'username' => 'required|is_unique[users.username]',
    //         'email' => 'required|valid_email',
    //         'password' => 'required|min_length[6]',
    //         'contact_number' => 'required',
    //         'image' => 'uploaded[image]|is_image[image]|max_size[image,4096]',
    //         'gender' => 'required',
    //         'role' => 'required',
    //         'date_of_birth' => 'required',
    //         'civil_status' => 'required'
    //     ]);
        

    //     // Check if validation passes
    //     if (!$validation->withRequest($this->request)->run()) {
    //         // If validation fails, return back to the registration form with errors
    //         return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    //     }

    //     // Handle file upload
        // $profileImage = $this->request->getFile('image');
        // $newName = $profileImage->getRandomName();

        // // Check if a profile image was uploaded
        // if ($profileImage->isValid() && !$profileImage->hasMoved()) {
        //     // Move the uploaded file to the desired directory
        //     $profileImage->move(ROOTPATH . 'public/uploads'.$newName);

    //         // Create a new user record in the database
            // $userModel = new UserAccountsModel();
    //         $userModel->save([
    //             'firstname' => $this->request->getPost('firstname'),
    //             'middlename' => $this->request->getPost('middlename'),
    //             'lastname' => $this->request->getPost('lastname'),
    //             'address' => $this->request->getPost('address'),
    //             'username'   => $this->request->getPost('username'),
    //             'email'      => $this->request->getPost('email'),
    //             'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
    //             'contact_number' => $this->request->getPost('contact_number'),
    //             'image' => $newName,
    //             'role' => $this->request->getPost('role'),
    //             'gender' => $this->request->getPost('gender'),
    //             'date_of_birth' => $this->request->getPost('date_of_birth'),
    //             'civil_status' => $this->request->getPost('civil_status'),
    //         ]);
    //     } else {
    //         // If file upload fails, return back to the registration form with an error
    //         return redirect()->to('login')->with('error', 'Failed to upload profile image.');
    //     }
    //     } catch (\Throwable $th) {
    //         return redirect()->to('dashboard')->with('error', 'Failed to upload profile image.');
    //     }
    // } 

    public function __construct(){
        helper(['url', '']);
    }

    public function save()
    {
        $validation = $this->validate([
            'firstname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your first name is required'
                ]
            ],
            'lastname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your last name is required'
                ]
            ],
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your address is required'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Your email is required',
                    'valid_email' => 'You must enter a valid email address',
                    'is_unique' => 'Email already taken'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]|max_length[12]',
                'errors' => [
                    'required' => 'Your password is required',
                    'min_length' => 'Password must have at least 6 characters in length',
                    'max_length' => 'Password must not have characters more than 12 in length',
                ]
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your gender is required'
                ]
            ],
            'contact_number' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your contact number is required'
                ]
            ],
            'image' => [
                'rules' => 'uploaded[image]|is_image[image]|max_size[image,4096]',
                'errors' => [
                    'uploaded' => 'Please select an image to upload.',
                    'is_image' => 'The selected file is not a valid image.',
                    'max_size' => 'The selected image exceeds the maximum allowed size of 4MB.'
                ]
            ]
        ]);
        
        if (!$validation) {
            return view('UserPage/register', ['validation' => $this->validator]);
        } else {
            $profileImage = $this->request->getFile('image');
        
            if ($profileImage->isValid() && !$profileImage->hasMoved()) {
                $newName = $profileImage->getRandomName();
                $profileImage->move(ROOTPATH . 'public/uploads', $newName);
        
                $firstname = $this->request->getPost('firstname');
                $lastname = $this->request->getPost('lastname');
                $address = $this->request->getPost('address');
                $email = $this->request->getPost('email');
                $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
                $contact_number = $this->request->getPost('contact_number');
                $image = $newName;
                $role = $this->request->getPost('role');
                $gender = $this->request->getPost('gender');
        
                $values = [
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'address' => $address,
                    'email' => $email,
                    'password' => $password,
                    'contact_number' => $contact_number,
                    'image' => $image,
                    'role' => $role,
                    'gender' => $gender
                ];
        
                $usersModel = new UsersModel();
                $query = $usersModel->insert($values);
        
                if (!$query) {
                    return redirect()->back()->with('fail', 'Something went wrong');
                } else {
                    return redirect()->back()->with('fail', $profileImage->getErrorString());
                }
            } else {
                return redirect()->to('register')->with('success', 'You are now registered successfully');
            }
        }
        
    }
}
