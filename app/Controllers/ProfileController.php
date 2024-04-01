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
        
        // Select specific fields from the database, including 'user_id'
        $userData = $usersModel->select('user_id, staff_id, firstname, lastname, address, email, contact_number, image, role, gender, login_status, last_login_status')
                            ->findAll();

        // Pass $userData to your view
        return view('AdminPage/manageprofile', ['userData' => $userData]);
    }


}
