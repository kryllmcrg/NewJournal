<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    // public function front()
    // {
    //     return view('front');
    // }
}
