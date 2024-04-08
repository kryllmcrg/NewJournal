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

    public function showComments($news_id = null)
    {
        // Load the necessary model
        $commentModel = new CommentModel();
        
        // Fetch comment data from the database
        $data['comments'] = $commentModel->findAll();
        
        // Load the view and pass the comment data to it
        return view('UserPage/news_read', $data);
    }
}
