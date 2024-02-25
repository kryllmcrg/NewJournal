<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\CategoryModel;

class UserController extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function home()
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();
    
        $data['categories'] = $categories;
    
        // Load the view with the categories data
        return view('UserPage/home' , $data);
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
}
