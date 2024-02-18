<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;

class ProfileController extends BaseController
{
    public function dashboard()
    {
        return view('AdminPage/dashboard');
    }

   // In your controller
    public function manageProfile()
    {
        // Load the UserModel
        $usersModel = new UsersModel();
        
        // Fetch all user data
        $data['userData'] = $usersModel->findAll();

        // Pass $data to your view
        return view('AdminPage/manageprofile', $data);
    }
}
