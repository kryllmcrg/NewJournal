<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StaffController extends BaseController
{
    public function addingNews()
    {
        return view('StaffPage/addingNews');
    }
}
