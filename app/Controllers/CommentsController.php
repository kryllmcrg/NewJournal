<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;
use App\Models\CategoryModel;
use App\Models\NewsModel;
use App\Models\CommentModel;

class CommentsController extends BaseController
{
    public function dashboard()
    {
        return view('AdminPage/dashboard');
    }

    public function managecomments()
    {
        return view('AdminPage/managecomments');
    }

    public function addComment()
{
    // Load necessary models and libraries
    $commentModel = new CommentModel();
    $session = session();

    // Retrieve form data
    $data = [
        'news_id' => $this->request->getPost('news_id'), // Using getPost for security
        'parent_comment_id' => null, // Assuming no nested comments for now
        'comment' => $this->request->getPost('message'), // Assuming textarea has name 'message'
        'comment_author' => $this->request->getPost('name'),
        'comment_date' => date('Y-m-d H:i:s'), // Current timestamp
        'user_id' => $this->request->getPost('user_id') // Retrieve user_id from form data
    ];

    // Insert data into the database
    $commentModel->insert($data);

    // Redirect back to the news page
    return redirect()->to(base_url('/news_read/' . $data['news_id'])); // Redirect to the news page
}
}
