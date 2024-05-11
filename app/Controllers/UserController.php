<?php

namespace App\Controllers;

use App\Models\UserLikeLogsModel;
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
    // In your controller file (e.g., News.php)
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
            $userLikeLogsModel = new UserLikeLogsModel();
    
            // Fetch only approved news articles with a limit of 10
            $approvedNews = $newsModel->select('
                news.news_id,
                news.title,
                news.content,
                news.images,
                likes.like_id,
                likes.likes_count,
                likes.dislikes_count
            ')
                ->join('likes', 'likes.news_id = news.news_id')
                ->where('news.news_status', 'Approved')
                ->where(['news.archived' => 0])
                ->orderBy('news.publication_date', 'DESC') // Order by publication date to get the latest news first
                ->limit(10)
                ->findAll();
    
            // Check if the count of approved news is already at the maximum limit
            $newsCount = count($approvedNews);
            if ($newsCount >= 10) {
                // Archive the oldest news article
                $oldestNews = $approvedNews[$newsCount - 1]; // Get the last news article
                $newsModel->update($oldestNews['news_id'], ['archived' => 1]); // Archive the oldest news
            }
    
            $userId = session()->get('user_id');
            if (isset($userId)) {
                foreach ($approvedNews as &$news) {
                    $likeStatus = $userLikeLogsModel->select('action')->where('news_id', $news['news_id'])->first();
    
                    if ($likeStatus) {
                        $news['like_status'] = $likeStatus['action'];
                    } else {
                        $news['like_status'] = '';
                    }
                }
            }
    
            // Load the category model
            $categoryModel = new CategoryModel();
    
            // Fetch all categories
            $categories = $categoryModel->findAll();
    
            // Pass the approved news data and categories to the view
            return view('UserPage/home', ['newsData' => $approvedNews, 'categories' => $categories, 'userId' => $userId]);
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
        try {
            // Load the users model
            $usersModel = new UsersModel();

            // Fetch all users
            $users = $usersModel->findAll();

            // Filter users with roles "Admin" and "Staff"
            $filteredUsers = array_filter($users, function ($user) {
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

    public function filterNews($categoryName = null)
    {
        try {
            // Load the news model
            $newsModel = new NewsModel();

            // If no specific category is selected, fetch all approved news articles
            if ($categoryName === null || $categoryName === 'all') {
                $newsData = $newsModel->where(['archived' => 0, 'news_status' => 'Approved'])->findAll();
            } else {
                // Fetch approved news articles filtered by the selected category name
                $newsData = $newsModel->select('news.*, images')
                    ->join('category', 'category.category_id = news.category_id')
                    ->where('category.category_name', $categoryName)
                    ->where(['archived' => 0, 'news_status' => 'Approved'])
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

    public function contact()
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();

        // Retrieve the automatic reply message from the database or any other source
        $autoReplyMessage = "Thank you for your comments and suggestions. God bless you!";

        $data = [
            'categories' => $categories,
            'autoReplyMessage' => $autoReplyMessage,
        ];

        return view('UserPage/contact', $data);
    }


    public function news($news_id)
    {
        // Assuming $news_id is passed as a parameter to the method
    
        $newsModel = new NewsModel();
    
        // Fetch article details by news_id
        $article = $newsModel->find($news_id);
    
        if (!$article) {
            // Handle case where article with given ID is not found
            // For example, redirect to an error page or show a 404 error
            return redirect()->to('error_page'); // Example
        }
    
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
    
        return view('UserPage/news', $data);
    }    

    public function searchNews()
    {
        // Get the search query from the request
        $searchQuery = $this->request->getPost('searchQuery');

        try {
            // Load the news model
            $newsModel = new NewsModel();

            // Perform the search based on the title or content columns
            $searchResults = $newsModel->like('title', 'publication_date', $searchQuery)
                ->orLike('content', $searchQuery)
                ->findAll();

            // Pass the search results to the view
            return view('UserPage/search_results', ['searchResults' => $searchResults]);
        } catch (\Throwable $th) {
            // Handle any errors
            return $this->response->setJSON(['error' => $th->getMessage()]);
        }
    } 

}
