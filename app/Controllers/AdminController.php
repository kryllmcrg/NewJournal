<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function dashboard()
    {
        return view('AdminPage/dashboard');
    }

   // In your controller
    public function manageProfile()
    {
        // Load the UserModel
        $userModel = new \App\Models\UsersModel();
        
        // Fetch all user data
        $data['users'] = $userModel->findAll();

        // Pass $data to your view
        return view('AdminPage/manageprofile', $data);
    }

    public function addnews()
    {
        return view('AdminPage/addnews');
    }

    public function managenews()
    {
        return view('AdminPage/managenews');
    }

    public function managecomments()
    {
        return view('AdminPage/managecomments');
    }

    public function chats()
    {
        return view('AdminPage/chats');
    }

    public function addcategory()
    {
        return view('AdminPage/addcategory');
    }

    public function managecategory()
    {
        return view('AdminPage/managecategory');
    }
}
