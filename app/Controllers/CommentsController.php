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

    public function addComment()
{
    // Load necessary models and libraries
    $commentModel = new CommentModel();
    $session = session();

    // Retrieve form data
    $news_id = $this->request->getPost('news_id');
    $message = $this->request->getPost('message');
    $name = $this->request->getPost('name');
    $user_id = $this->request->getPost('user_id');

    // Validate form data
    if (!$news_id || !$message || !$name || !$user_id) {
        return redirect()->to(base_url('/error')); // Redirect to an error page or handle appropriately
    }

    // Insert data into the database
    $data = [
        'news_id' => $news_id,
        'parent_comment_id' => null,
        'comment' => $message,
        'comment_author' => $name,
        'comment_date' => date('Y-m-d H:i:s'),
        'user_id' => $user_id
    ];
    $commentModel->insert($data);

    // Redirect back to the news page
    return redirect()->to(base_url('/news_read/' . $news_id));
}


    // In your controller file (e.g., News.php)
public function replyComment($parentCommentId)
{
     // Load necessary models and libraries
     $commentModel = new CommentModel();
     $session = session();
 
     // Retrieve form data
     $news_id = $this->request->getPost('news_id');
     $message = $this->request->getPost('message');
     $name = $this->request->getPost('name');
     $user_id = $this->request->getPost('user_id');
 
     // Validate form data
     if (!$news_id || !$message || !$name || !$user_id) {
         return redirect()->to(base_url('/error')); // Redirect to an error page or handle appropriately
     }
 
     // Insert data into the database
     $data = [
         'news_id' => $news_id,
         'parent_comment_id' => null,
         'comment' => $message,
         'comment_author' => $name,
         'comment_date' => date('Y-m-d H:i:s'),
         'user_id' => $user_id
     ];
     $commentModel->insert($data);
 
     // Redirect back to the news page
     return redirect()->to(base_url('/news_read/' . $news_id));
}

public function managecomments($news_id = null)
    {
        // Load the necessary model
        $commentModel = new CommentModel();
        
        if ($news_id !== null) {
            $data['commentData'] = $commentModel->where('news_id', $news_id)->findAll();
        } else {
            $data['commentData'] = []; // Set an empty array if $news_id is null
        }
        
        return view('AdminPage/managecomments', $data);
    }
    
    public function showManageCommentsPage()
    {
        // Load the necessary model
        $commentModel = new CommentModel();
        
        // Fetch all comments (since $news_id is not provided)
        $data['commentData'] = $commentModel->findAll();
        
        return view('AdminPage/managecomments', $data);
    }
    public function commentStatus()
    {
        try {
            // Check if the request is AJAX
            if (!$this->request->isAJAX()) {
                return $this->response->setStatusCode(400)->setBody('Invalid request');
            }

            // Get comment ID and status from POST data
            $commentId = $this->request->getVar('comment_id');
            $commentStatus = $this->request->getVar('comment_status');

            // Update comment status
            $commentModel = new CommentModel();
            $updated = $commentModel->updateCommentStatus($commentId, $commentStatus);

            // Prepare response
            $response = [
                'success' => $updated,
                'message' => $updated ? 'Comment status updated successfully' : 'Failed to update comment status',
            ];

            // Send response
            return $this->response->setJSON($response);
        } catch (\Throwable $th) {
            // Handle exceptions
            return $this->response->setJSON(['success' => false, 'message' => 'Error: ' . $th->getMessage()]);
        }
    }
    

}
