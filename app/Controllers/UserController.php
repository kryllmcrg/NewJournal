<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\CategoryModel;
use App\Models\NewsModel;
use App\Models\LikeModel;
use App\Models\CommentModel;

class UserController extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function news_read($news_id)
    {
        $newsModel = new NewsModel();

        // Fetch article details by news_id
        $article = $newsModel->find($news_id);

        // Fetch category name using the category_id
        $categoryModel = new CategoryModel();
        $category = $categoryModel->find($article['category_id']);
        $category_name = $category ? $category['category_name'] : '';

        // Pass data to view
        $data = [
            'article' => $article,
            'category_name' => $category_name,
        ];
        
        // Fetch comments with status 'approved'
        $commentModel = new CommentModel();
        $data['comments'] = $commentModel->where('news_id', $news_id)
                                        ->where('comment_status', 'approved')
                                        ->findAll();
        
        return view('UserPage/news_read', $data);
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
            
            // Pass the approved news data and categories to the view
            return view('UserPage/home', ['newsData' => $approvedNews, 'categories' => $categories]);
        } catch (\Throwable $th) {
            // Handle any errors
            return $this->response->setJSON(['error' => $th->getMessage()]);
        }
    }
    public function filterNews($categoryName = null)
{
    try {
        // Load the news model
        $newsModel = new NewsModel();
        
        // If no specific category is selected, fetch all news articles
        if ($categoryName === null || $categoryName === 'all') {
            $newsData = $newsModel->findAll();
        } else {
            // Fetch news articles filtered by the selected category name
            $newsData = $newsModel->select('news.*, images')
                                ->join('category', 'category.category_id = news.category_id')
                                ->where('category.category_name', $categoryName)
                                ->findAll();
        }

        // Decode the JSON string in the images column
        foreach ($newsData as &$article) {
            $article['images'] = json_decode($article['images'], true);
        }
        
        // Pass the news data to the view
        return $this->response->setJSON(['newsData' => $newsData]);
    } catch (\Throwable $th) {
        // Handle any errors
        return $this->response->setJSON(['error' => $th->getMessage()]);
    }
}


    public function getCategoryData()
    {
        // Create an instance of the CategoryModel
        $categoryModel = new CategoryModel();

        // Retrieve all categories from the database
        $categories = $categoryModel->findAll();

        // Pass the categories data to the view
        return view('UserPage/home', ['categories' => $categories]);
    }

    public function like($newsId)
    {
        // For demonstration, assuming the user ID is 1
        $userId = 1;
    
        // Create an instance of the LikeModel
        $likeModel = new LikeModel();
    
        // Check if the user has already liked the news
        $existingLike = $likeModel->where('news_id', $newsId)
                                ->where('user_id', $userId)
                                ->first();
    
        if ($existingLike) {
            return json_encode(['message' => 'You have already liked this news']);
        }
    
        // If the user hasn't liked the news yet, insert the like into the database
        $likeModel->insert([
            'news_id' => $newsId,
            'user_id' => $userId,
            'likes_status' => 'Like', // Assuming 'Like' represents a like
            'likes_count' => 1        // Initial like count
        ]);
    
        return json_encode(['message' => 'Like saved successfully']);
    }    
        
    public function about()
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();
    
        $data['categories'] = $categories;
        try {
            // Load the users model
            $usersModel = new UsersModel();
            
            // Fetch all users
            $users = $usersModel->findAll();

            // Filter users with roles "Admin" and "Staff"
            $filteredUsers = array_filter($users, function($user) {
                return in_array($user['role'], ['Admin', 'Staff']);
            });

            // Load the category model
            $categoryModel = new CategoryModel();
            $categories = $categoryModel->findAll();
            
            $data['users'] = $filteredUsers; // Use filtered users
            $data['categories'] = $categories;

        return view('UserPage/about', $data);
        } catch (\Throwable $th) {
            // Handle any errors
            return $this->response->setJSON(['error' => $th->getMessage()]);
        }
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
