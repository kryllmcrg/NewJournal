<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string
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
    public function dashboard()
    {
        return view('AdminPage/dashboard');
    }
}
