<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;
use App\Models\CategoryModel;
use App\Models\NewsModel;

class ChatController extends BaseController
{
    public function dashboard()
    {
        return view('AdminPage/dashboard');
    }

    public function chats()
    {
        return view('AdminPage/chats');
    }
    public function index()
    {
        // Load the model
        $messageModel = new MessageModel();

        // Fetch messages for the logged-in user
        $messages = $messageModel->getMessages($userId);

        // Load the view and pass the messages
        return view('messages', ['messages' => $messages]);
    }

    public function sendMessage()
    {
        // Load the model
        $messageModel = new MessageModel();

        // Get the data from the form
        $data = [
            'sender_id' => $this->request->getPost('sender_id'),
            'receiver_id' => $this->request->getPost('receiver_id'),
            'message' => $this->request->getPost('message'),
        ];

        // Save the message to the database
        $messageModel->sendMessage($data);

        // Redirect to the message page
        return redirect()->to('/messages');
    }
}
