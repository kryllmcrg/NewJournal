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
