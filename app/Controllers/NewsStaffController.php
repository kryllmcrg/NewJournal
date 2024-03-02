<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoryModel;
use App\Models\NewsStaffModel;

class NewsStaffController extends BaseController
{
    public function createnews()
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();
    
        $data['categories'] = $categories;
    
        // Load the view with the categories data
        return view('StaffPage/createnews', $data); 
    }
    

    public function managenews()
    {
        return view('StaffPage/managenews');
    }
}
