<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoryModel;
use App\Models\NewsModel;

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
            $staffId = session()->get('staff_id');
            $title = $this->request->getPost('title');
            $content = $this->request->getPost('content');
            $category_id = $this->request->getPost('category_id');
            $author = $this->request->getPost('author');
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
            if (empty($value)) {
                return $this->response->setStatusCode(400)->setJSON(["error" =>"Error: Required data '$key' is missing."]);
            }
        }
        $newsModel = new NewsModel();
        $result = $newsModel->insert($data);
        return $this->response->setJSON($result);
        } catch (\Throwable $th) {
            return $this->response->setJSON(['error' => $th->getMessage()]);
        }  
    }  

    public function managenewstaff()
    {
        // Load the NewsModel
        $newsModel = new NewsModel();

        // Fetch news data from the database
        $data['newsData'] = $newsModel->findAll(); // Assuming findAll() fetches all news items

        // Load the view file and pass the news data to it
        return view('StaffPage/managenewstaff', $data); // Pass the $data array to the view
    }

    public function dashboard()
    {
        return view('StaffPage/dashboard');
    }
}
