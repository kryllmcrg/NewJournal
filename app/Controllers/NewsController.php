<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\NewsModel;

class NewsController extends BaseController
{
    public function dashboard()
    {
        return view('AdminPage/dashboard');
    }

    public function addnews()
    {
        return view('AdminPage/addnews');
    }

    public function addNewsSubmit()
    {
        try {
            $newsModel = new NewsModel();
            $images = $this->request->getFiles('images');
            
            // Check if files were uploaded
            if (empty($images)) {
                return $this->response->setStatusCode(400)->setJSON(["error" => "Error: No file uploaded."]);
            }
            
            $imageNames = [];
            foreach ($images as $image) {
                if ($image->isValid() && !$image->hasMoved()) {
                    $newName = $image->getRandomName();
                    $image->move('./uploads', $newName);
                    $imageNames[] = $newName;
                }
            }
    
            // Retrieve other data from the request
            $data = [
                'title' => $this->request->getVar('title'),
                'subTitle' => $this->request->getVar('subTitle'),
                'author' => $this->request->getVar('author'),
                'category' => $this->request->getVar('category'),
                'images' => implode(',', $imageNames), // Storing multiple image filenames as comma-separated string
                'content' => strip_tags($this->request->getVar('content')),
                'publicationDate' => $this->request->getVar('publicationDate'),
                // Add other fields as needed
            ];
    
            // Validate data
            if (in_array('', $data)) {
                return $this->response->setStatusCode(400)->setJSON(["error" => "Error: Required data is missing."]);
            }
    
            // Validation Rules
            $validationRules = [
                'title' => 'required',
                'subTitle' => 'required',
                'author' => 'required',
                'category' => 'required',
                'images' => 'required',
                'content' => 'required',
                'publicationDate' => 'required',
                // Add other validation rules as needed
            ];
    
            // Set validation rules
            $newsModel->setValidationRules($validationRules);
    
            // Insert data into the database
            if (!$newsModel->insert($data)) {
                return $this->response->setStatusCode(500)->setJSON(["error" => "Error: Unable to insert data."]);
            }
    
            $response = [
                'message' => 'News created successfully',
                'data' => $data
            ];
    
            return $this->response->setStatusCode(200)->setJSON($response);
        } catch (\Throwable $th) {
            return $this->response->setStatusCode(500)->setJSON(["error" => "Error: " . $th->getMessage()]);
        }
    }    

    public function __construct(){
        $this->NewsModel = new NewsModel();
    }

    public function managenews()
    {
        return view('AdminPage/managenews');
    }
}
