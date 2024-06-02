<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoryModel;
use App\Models\NewsModel;
use App\Models\UsersModel;
use App\Models\LikeModel;
use App\Models\UserAuditModel;

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
    try             
    {
        $userAudit = new UserAuditModel();
        $users = new UsersModel();

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

            $user = $users->select('user_id')->where(['staff_id' => $staffId])->first();

            $userAuditRes = $userAudit->addUserAuditLog($user['user_id'], $result, 'Add', "Add $title News", '');

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
        // Load the UsersModel
        $usersModel = new UsersModel();

        // Fetch all users with the role 'user'
        $users = $usersModel->getUsersByRole('user');

        // Pass the users data to the view
        return view('user_view', ['users' => $users]);
    }

    public function changeNews($id)
    {
        $newsModel = new NewsModel();
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();

        $news = $newsModel->find($id);

        return view('StaffPage/changeNews', ['categories' => $categories, 'news' => $news]);
    }
    public function newsUpdate()
{
    // Retrieve the submitted form data
    $newsId = $this->request->getPost('news_id');
    $title = $this->request->getPost('title');
    $author = $this->request->getPost('author');
    $categoryId = $this->request->getPost('category_id');
    $content = $this->request->getPost('content');
    $remarks = $this->request->getPost('remarks');

    // Load the NewsModel
    $newsModel = new NewsModel();

    // Check if the news with the given ID exists
    $news = $newsModel->find($newsId);
    if (!$news) {
        return $this->response->setJSON(['success' => false, 'message' => 'News not found']);
    }

    // Check if the provided category ID exists
    $categoryModel = new CategoryModel();
    $category = $categoryModel->find($categoryId);
    if (!$category) {
        return $this->response->setJSON(['success' => false, 'message' => 'Category not found']);
    }

    // Update the news data
    $data = [
        'title' => $title,
        'author' => $author,
        'category_id' => $categoryId,
        'content' => $content,
        'remarks' => $remarks,
    ];

    $userAudit = new UserAuditModel();
    $users = new UsersModel();
    $staffId = session()->get('staff_id');

    $user = $users->select('user_id')->where(['staff_id' => $staffId])->first();

    // Perform the update operation
    $updated = $newsModel->update($newsId, $data);
    $userAuditRes = $userAudit->addUserAuditLog($user['user_id'], $newsId, 'Edit', "Edit $title News", $remarks);

    // Check if the update was successful
    if ($updated) {
        return $this->response->setJSON(['success' => true, 'message' => 'News successfully updated!']);
    } else {
        return $this->response->setJSON(['success' => false, 'message' => 'Failed to update news']);
    }
}

}