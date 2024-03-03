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
        try {
            $categoryModel = new CategoryModel();
            $categories = $categoryModel->findAll();

            $data['categories'] = $categories;

            if ($this->request->getMethod() === 'post') {
                $newsStaffModel = new NewsModel();

                // Validate form data
                $validation =  \Config\Services::validation();
                $validation->setRules([
                    'title' => 'required',
                    'subtitle' => 'required',
                    'author' => 'required',
                    'category' => 'required',
                    'publication_date' => 'required',
                    // Add validation rules for other fields as needed
                ]);

                if (!$validation->withRequest($this->request)->run()) {
                    // Validation failed, reload the view with validation errors
                    return view('StaffPage/createnews', ['validation' => $validation, 'categories' => $categories]);
                }

                // Get the submitted form data
                $newsData = [
                    'title' => $this->request->getPost('title'),
                    'subTitle' => $this->request->getPost('subtitle'),
                    'author' => $this->request->getPost('author'),
                    'category' => $this->request->getPost('category'), // Store category name
                    'publication_date' => $this->request->getPost('publication_date'),
                    // Add other fields as needed
                ];

                // Save the news item
                $newsStaffModel->insert($newsData);

                // Redirect to the news list page with a success message
                return redirect()->to('/newslist')->with('success', 'News item created successfully');
            }

            // Load the view with the categories data
            return view('StaffPage/createnews', $data);
        } catch (\Exception $e) {
            // Handle any exceptions that occur
            return $this->response->setStatusCode(500)->setJSON(["error" => "An error occurred: " . $e->getMessage()]);
        }
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
        return view('StaffPage/managenewstaff');
    }

    public function dashboard()
    {
        return view('StaffPage/dashboard');
    }
}
