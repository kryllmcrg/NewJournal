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

    public function news_read()
    {
        return view('UserPage/news_read');
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
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();
    
        $data['categories'] = $categories;

        return view('UserPage/about', $data);
    }

    public function contact()
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();
    
        $data['categories'] = $categories;

        return view('UserPage/contact', $data);
    }

    public function news()
    {
        return view('UserPage/news');
    }
}
