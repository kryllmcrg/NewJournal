<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\NewsModel;
use App\Models\CategoryModel;

class NewsController extends BaseController
{
    public function dashboard()
    {
        return view('AdminPage/dashboard');
    }

    public function viewnews($id)
    {
        $newsModel = new NewsModel();

        $news = $newsModel->find($id);

        return view('AdminPage/viewnews');
    }


    public function addnews()
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();
    
        $data['categories'] = $categories;
    
        if ($this->request->getMethod() === 'post') {
            $newsModel = new NewsModel();
    
            // Get the submitted form data
            $newsData = [
                'title' => $this->request->getPost('title'),
                'subtitle' => $this->request->getPost('subtitle'),
                'author' => $this->request->getPost('author'),
                'category' => $this->request->getPost('category'), // Store category name
                'publication_date' => $this->request->getPost('publication_date'),
                // Add other fields as needed
            ];
    
            // Save the news item
            $newsModel->insert($newsData);
    
            // Redirect to the news list page or show a success message
            return redirect()->to('/newslist');
        }
    
        // Load the view with the categories data
        return view('AdminPage/addnews', $data);
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
                'comment' => $this->request->getVar('comment'),
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
            
            // Redirect to 'addnews' page with success message
            return redirect()->to('addnews')->with('success', 'News created successfully');
        } catch (\Throwable $th) {
            return $this->response->setStatusCode(500)->setJSON(["error" => "Error: " . $th->getMessage()]);
        }
    }

    public function __construct(){
        $this->NewsModel = new NewsModel();
    }

    public function deleteNews($id)
    {
        try {
            $newsModel = new NewsModel();
            
            // Delete the news item
            $deleted = $newsModel->where('id_news',$id)->delete();
    
            if ($deleted) {
                // Return success message if deletion was successful
                return redirect()->to('managenews');
            } else {
                // Return error message if deletion failed
                return $this->response->setJSON(['error' => 'Failed to delete the record'])->setStatusCode(500);
            }
        } catch (\Throwable $th) {
            // Return error message if an exception occurred during deletion
            return $this->response->setJSON(['error' => 'An error occurred during deletion'])->setStatusCode(500);
        }
    }    

    // public function updateNews()
    // {
    //     try {
    //         $id_news = $this->request->getVar('id_news');

    //         $data = [
    //             'title' => $this->request->getVar('editNewsTitle'),
    //             'subTitle' => $this->request->getVar('editNewsSubTitle'),
    //             'author' => $this->request->getVar('editNewsAuthor'),
    //             'category' => $this->request->getVar('editCategory'),
    //             'content' => strip_tags($this->request->getVar('editNewsContent')),
    //             'publicationDate' => $this->request->getVar('editNewsPublicationDate')
    //         ];

    //         // Assuming $this->news is a model instance (e.g., NewsModel)
    //         $newsModel = new NewsModel();
    //         $updated = $newsModel->where('id_news', $id_news)->set($data)->update();

    //         return redirect()->to('managenews');
    //     } catch (\Throwable $th) {
    //         return $this->respond(["error" => "Error: " . $th->getMessage()]);
    //     }
    // }

    public function editNews()
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();
    
        $data['categories'] = $categories;
    
        // Load the view with the categories data
        return view('EditPage/editNews' , $data);
    }

    public function managenews()
    {
        // Load the NewsModel
        $newsModel = new NewsModel();
    
        // Fetch news data from the database
        $data['newsData'] = $newsModel->findAll(); // Assuming findAll() fetches all news items
    
        // Load the view file and pass the news data to it
        return view('AdminPage/managenews', $data); // Pass the $data array to the view
        
    }

    public function changeStatus()
    {
        try {
            $newsID = $this->request->getVar('id_news');
            $status = $this->request->getVar('status');

            $data['status'] = $status;

            $model = new NewsModel();
            $model->where('id_news', $newsID)->set($data)->update();

            return $this->response->setJSON([$data, $newsID]);
        } catch (\Throwable $th) {
            return $this->response->setJSON(['message' => 'Error: ' . $th->getMessage()]);
        }
    }

    public function archive()
    {
        // Load the NewsModel
        $newsModel = new NewsModel();
    
        // Fetch news data from the database including only the specified columns
        $newsData = $newsModel->select('title, author,created_at, updated_at comment, id_news')->findAll();
    
        // Pass the data to the view
        return view('AdminPage/archive', ['newsData' => $newsData]);
    }    

}
