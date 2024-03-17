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
            $newsStaffModel = new NewsModel();
            $images = $this->request->getFiles();
            
            // Check if files were uploaded
            if (empty($images)) {
                return $this->response->setStatusCode(400)->setJSON(["error" => "Error: No file uploaded."]);
            }
            
            $imageNames = [];
            foreach ($images['images'] as $image) {
                // Check if the file is valid and hasn't already been moved
                if ($image->isValid() && !$image->hasMoved()) {
                    $newName = $image->getRandomName();
                    $image->move('public/uploads/', $newName);
                    $imageNames[] = $newName;
                } else {
                    // Handle error conditions
                    return $this->response->setStatusCode(400)->setJSON(["error" => "Error uploading file(s)."]);
                }
            }
            
            $data = [
                'title' => $this->request->getVar('title'),
                'subTitle' => $this->request->getVar('subTitle'),
                'author' => $this->request->getVar('author'),
                'category' => $this->request->getVar('category'),
                'images' => implode(',', $imageNames),
                'content' => strip_tags($this->request->getVar('content')),
                'comment' => $this->request->getVar('comment'),
            ];
            
            // Validate data
            foreach ($data as $key => $value) {
                if (empty($value)) {
                    return $this->response->setStatusCode(400)->setJSON(["error" => "Error: Required data '$key' is missing."]);
                }
            }
            
            // Insert data into the database
            if (!$newsStaffModel->insert($data)) {
                return $this->response->setStatusCode(500)->setJSON(["error" => "Error: Unable to insert data."]);
            }
            
            $response = [
                'message' => 'News created successfully',
                'data' => $data
            ];
            
            // Redirect to 'addnews' page with success message
            return redirect()->to('createnews')->with('success', 'News created successfully');
        } catch (\Throwable $th) {
            return $this->response->setStatusCode(500)->setJSON(["error" => "Error: " . $th->getMessage()]);
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
