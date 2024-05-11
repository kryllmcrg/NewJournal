<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoryModel;
use App\Models\NewsModel;
use App\Models\UsersModel;
use App\Models\LikeModel;

class NewsStaffController extends BaseController
{
    public function createnews()
    {
        $categories = new CategoryModel();

        $data = [
            'categories' => $categories->select('category_id,category_name')->findAll(),
        ];

        return view('StaffPage/createnews',$data);
    }

    public function createNewsSubmit()
    {
    try {
        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');
        $category_id = $this->request->getPost('category_id');
        $author = $this->request->getPost('author');
        $staffId = session()->get('staff_id');
        $images = $this->request->getFiles('files');
        $uploadedImages = [];
        foreach ($images as $file) {
            foreach ($file as $uploadedFile) {
                if ($uploadedFile->isValid() && !$uploadedFile->hasMoved()) {
                    $newName = $uploadedFile->getRandomName();
                    $uploadedFile->move('./uploads/', $newName);
                    $imageUrl = base_url('uploads/' . $newName);
                    $uploadedImages[] = $imageUrl;
            } else {
                $uploadedImages[] = ['error' => 'Invalid file'];
            }
        }
    }
    $data = [
        'title' => $title,
        'content' => $content,
        'category_id' => $category_id,
        'author' => $author,
        'images' => json_encode($uploadedImages),
        'staff_id' => $staffId,
        'news_status' => 'Pending',
        'publication_status' => 'Draft'
    ];
    // Validate data
        foreach ($data as $key => $value) {
            if (empty($title) || empty($content) || empty($category_id) || empty($author) || empty($uploadedImages)) {
                return $this->response->setStatusCode(400)->setJSON(["error" =>"Error: Required data is missing."]);
            }        
        }
        $newsModel = new NewsModel();
        $result = $newsModel->insert($data);
        return $this->response->setJSON($result);
        } catch (\Throwable $th) {
            return $this->response->setJSON(['error' => $th->getMessage()]);
        }  
    } 

    public function deleteNews($id)
{
    try {
        $newsModel = new NewsModel();
        $likeModel = new LikeModel();

        // Begin a transaction
        $db = db_connect();
        $db->transStart();

        // Check if there are related records in the 'likes' table
        $relatedLikes = $likeModel->where('news_id', $id)->findAll();

        // Delete related records from the 'likes' table
        foreach ($relatedLikes as $like) {
            $likeModel->delete($like['like_id']);
        }

        // Update the 'archived' column of the news item to indicate it is archived
        $updated = $newsModel->where('news_id', $id)->set(['archived' => 1])->update();

        // Commit the transaction
        $db->transCommit();

        if ($updated) {
            // Return success message if update was successful
            return redirect()->to('managenewstaff')->with('success', 'News item archived successfully.');
        } else {
            // Return error message if update failed
            return redirect()->to('managenewstaff')->with('error', 'Failed to archive the news item.');
        }
    } catch (\Throwable $th) {
        // Rollback the transaction if an error occurred
        $db->transRollback();

        // Return error message if an exception occurred during the update
        return redirect()->to('managenewstaff')->with('error', 'An error occurred during deletion.');
    }
}


    public function managenewstaff()
    {
        // Load the required models
        $newsModel = new NewsModel();
        $userModel = new UsersModel();
    
        // Fetch news data from the database, joining with the users table to filter by role "Staff"
        $staffNewsData = $newsModel->select('news.*')
                                    ->join('users', 'users.staff_id = news.staff_id')
                                    ->where('users.role', 'Staff')
                                    ->findAll();
    
        // Pass the filtered news data to the view
        $data['newsData'] = $staffNewsData;
    
        // Load the view file and pass the news data to it
        return view('StaffPage/managenewstaff', $data);
    }

    public function dashboard()
    {
        return view('StaffPage/dashboard');
    }
}
