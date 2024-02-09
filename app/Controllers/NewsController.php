<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\NewsModel;

class NewsController extends BaseController
{
    public function dashboard()
    {
        return view('AdminPage/dashboard');
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
}
