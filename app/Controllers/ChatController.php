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
}
