<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;
use App\Models\CategoryModel;
use App\Models\NewsModel;

class AdminController extends BaseController
{
    public function dashboard()
    {
        return view('AdminPage/dashboard');
    }

   // In your controller
    public function manageProfile()
    {
        // Load the UserModel
        $userModel = new UsersModel();
        
        // Fetch all user data
        $data['userData'] = $userModel->findAll();

        // Pass $data to your view
        return view('AdminPage/manageprofile', $data);
    }

    public function addnews()
    {
        return view('AdminPage/addnews');
    }

    public function addNewsSubmit()
    {
        // Check if the form is submitted
        if ($this->request->getMethod() === 'post') {
            // Load the necessary helper for handling file uploads
            helper('filesystem');

            // Get the posted data
            $title = $this->request->getPost('title');
            $author = $this->request->getPost('author');
            $category = $this->request->getPost('category');
            $publicationDate = date('Y-m-d', strtotime($this->request->getPost('publicationDate')));
            $publicationUpdateDate = date('Y-m-d H:i:s');
            $content = $this->request->getPost('content');
            $status = 'draft'; // Assuming default status is 'draft'

            // Upload images
            $images = $this->request->getFiles();
            $uploadedImages = [];
            foreach ($images as $image) {
                if ($image->isValid() && !$image->hasMoved()) {
                    $newName = $image->getRandomName();
                    $image->move(WRITEPATH . 'uploads', $newName);
                    $uploadedImages[] = $newName;
                }
            }

            // Now, you can process the submitted data as needed (e.g., store it in the database)

            // Example: Storing data in the database (you'll need to adjust this based on your database setup)
            $newsModel = new NewsModel();
            $newsData = [
                'title' => $title,
                'author' => $author,
                'category' => $category,
                'publicationDate' => $publicationDate,
                'publicationUpdateDate' => $publicationUpdateDate,
                'content' => $content,
                'images' => json_encode($uploadedImages), // Storing image file names as JSON
                'status' => $status
            ];
            $newsModel->insert($newsData);

            // Redirect after successful submission
            return redirect()->to('/AdminPage/addnews')->with('success', 'News added successfully');
        }
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
        if ($this->request->getMethod() === 'post') {
            $categoryModel = new CategoryModel();
            $categoryName = $this->request->getPost('category_name');

            // Insert the new category into the database
            $categoryModel->insert(['name' => $categoryName]);

            // Redirect after adding the category
            return redirect()->to('/addcategory')->with('success', 'Category added successfully.');
        } else {
            return view('AdminPage/addcategory');
        }
    }

    public function getcategory()
    {
        // Load the CategoryModel
        $categoryModel = new CategoryModel();

        // Fetch all categories from the database
        $data['news_categories'] = $categoryModel->findAll();

        return view('home', $data);
    }

    public function managecategory()
    {
        return view('AdminPage/managecategory');
    }
}
