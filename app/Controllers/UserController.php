<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\CategoryModel;
use App\Models\NewsModel;

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
        try {
            // Load the news model
            $newsModel = new NewsModel();
            
            // Fetch only approved news articles
            $approvedNews = $newsModel->where('news_status', 'Approved')->findAll();
            
            // Load the category model
            $categoryModel = new CategoryModel();
            
            // Fetch all categories
            $categories = $categoryModel->findAll();
            
            // Map category IDs to category names for easy retrieval
            $categoryNames = [];
            foreach ($categories as $category) {
                $categoryNames[$category['category_id']] = $category['category_name'];
            }
            
            // Pass the approved news data to the view along with categories
            return view('UserPage/home', ['newsData' => $approvedNews, 'categoryNames' => $categoryNames]);
        } catch (\Throwable $th) {
            // Handle any errors
            return $this->response->setJSON(['error' => $th->getMessage()]);
        }
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
