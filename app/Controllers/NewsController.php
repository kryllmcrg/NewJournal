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
                'publicationDate' => $this->request->getVar('publicationDate'),
            ];
            
            // Validate data
            foreach ($data as $key => $value) {
                if (empty($value)) {
                    return $this->response->setStatusCode(400)->setJSON(["error" => "Error: Required data '$key' is missing."]);
                }
            }
            
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
