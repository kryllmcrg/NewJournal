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

    public function manageprofile()
    {
        return view('AdminPage/manageprofile');
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
