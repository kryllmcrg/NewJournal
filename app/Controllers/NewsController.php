<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\NewsModel;
use App\Models\CommentModel;
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

    public function editnews($id)
    {
        $newsModel = new NewsModel();
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();
    
        $news = $newsModel->find($id);
    
        return view('AdminPage/editnews', ['categories' => $categories, 'news' => $news]);
    }
    public function updateNews()
    {
        // Retrieve the submitted form data
        $newsId = $this->request->getPost('news_id');
        $title = $this->request->getPost('title');
        $author = $this->request->getPost('author');
        $categoryId = $this->request->getPost('category_id');
        $content = $this->request->getPost('content');
    
        // Load the NewsModel
        $newsModel = new NewsModel();
    
        // Check if the news with the given ID exists
        $news = $newsModel->find($newsId);
        if (!$news) {
            return "News not found"; // Handle error appropriately
        }
    
        // Check if the provided category ID exists
        $categoryModel = new CategoryModel();
        $category = $categoryModel->find($categoryId);
        if (!$category) {
            return "Category not found"; // Handle error appropriately
        }
    
        // Update the news data
        $data = [
            'title' => $title,
            'author' => $author,
            'category_id' => $categoryId,
            'content' => $content,
        ];
    
        // Perform the update operation
        $updated = $newsModel->update($newsId, $data);
    
        // Check if the update was successful
        if ($updated) {
            // Redirect back to the editnews page with the news ID
            return redirect()->to("/editNews/$newsId");
        } else {
            return "Failed to update news"; // Handle error appropriately
        }
    }
    

    public function addnews()
    {
        $categories = new CategoryModel();

        $data = [
            'categories' => $categories->select('category_id,category_name')->findAll(),
        ];

        return view('AdminPage/addnews',$data);
    }
    
    public function addNewsSubmit()
    {
        try {
            $title = $this->request->getPost('title');
            $content = $this->request->getPost('content');
            $category_id = $this->request->getPost('category_id');
            $author = $this->request->getPost('author');
            $staffId = session()->get('staff_id');
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
                'staff_id' => $staffId, // Use the retrieved staff_id
                'news_status' => 'Pending',
                'publication_status' => 'Draft'
            ];
            
            // Validate data
            if (empty($title) || empty($content) || empty($category_id) || empty($author) || empty($uploadedImages)) {
                return $this->response->setStatusCode(400)->setJSON(["error" => "Error: Required data is missing."]);
            }
            
            $newsModel = new NewsModel();
            $result = $newsModel->insert($data);
            
            return $this->response->setJSON($result);
        } catch (\Throwable $th) {
            return $this->response->setJSON(['error' => $th->getMessage()]);
        }  
    }
    public function __construct()
    {
        $this->NewsModel = new NewsModel();
    }

    public function deleteNews($id)
    {
        try {
            $newsModel = new NewsModel();

            // Delete the news item
            $deleted = $newsModel->where('news_id', $id)->delete();

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
    public function managenews()
    {
        // Load the NewsModel
        $newsModel = new NewsModel();

        // Fetch news data from the database
        $data['newsData'] = $newsModel->findAll(); // Assuming findAll() fetches all news items

        // Load the view file and pass the news data to it
        return view('AdminPage/managenews', $data); // Pass the $data array to the view
    }
    public function changeNewStatus()
    {
        try {
            // Set the default time zone to Philippines time
            date_default_timezone_set('Asia/Manila');

            $newsID = $this->request->getVar('news_id');
            $newsStatus = $this->request->getVar('news_status');

            // Prepare data to update news status
            $data = [
                'news_status' => $newsStatus
            ];

            // Update news status in the database
            $model = new NewsModel();
            $model->where('news_id', $newsID)->set($data)->update();

            // Update publication status based on news status
            $publicationStatus = '';

            switch ($newsStatus) {
                case 'Approved':
                    $publicationStatus = 'Published';
                    // Update publication date and time to current date and time if the news is approved and published
                    $currentDateTime = date('Y-m-d H:i:s');
                    $data['date_approved'] = $currentDateTime;
                    $data['publication_date'] = $currentDateTime;
                    break;
                case 'Decline':
                    $publicationStatus = 'Unpublished';
                    break;
                case 'Reject':
                    $publicationStatus = 'Draft';
                    break;
                default:
                    break;
            }

            // If publication status is determined, update the publication status in the database
            if ($publicationStatus !== '') {
                $data['publication_status'] = $publicationStatus;
                $model->where('news_id', $newsID)->set($data)->update();
            }

            return $this->response->setJSON(['success' => true, 'message' => 'Status updated successfully.']);
        } catch (\Throwable $th) {
            return $this->response->setJSON(['success' => false, 'message' => 'Error: ' . $th->getMessage()]);
        }
    }

    public function changePubStatus()
    {
        try {
            // Set the default time zone to Philippines time
            date_default_timezone_set('Asia/Manila');

            $newsID = $this->request->getVar('news_id');
            $publicationStatus = $this->request->getVar('publication_status'); // Get publication_status from request

            $data = [];
            if ($publicationStatus !== null) {
                $data['publication_status'] = $publicationStatus;
                if ($publicationStatus === 'Published') {
                    // Update publication date and time to current date and time if publication status is "Published"
                    $data['publication_date'] = date('Y-m-d H:i:s');
                }
            }

            if (empty($data)) {
                throw new \Exception('No status to update.');
            }

            $model = new NewsModel();
            $model->where('news_id', $newsID)->set($data)->update();

            return $this->response->setJSON(['success' => true, 'message' => 'Publication status updated successfully.']);
        } catch (\Throwable $th) {
            return $this->response->setJSON(['success' => false, 'message' => 'Error: ' . $th->getMessage()]);
        }
    }

    public function archive()
    {
        // Load the NewsModel
        $newsModel = new NewsModel();

        // Fetch news data from the database including only the specified columns
        $newsData = $newsModel->select('title, author,created_at, updated_at, news_id')->findAll();

        // Pass the data to the view
        return view('AdminPage/archive', ['newsData' => $newsData]);
    }

}
