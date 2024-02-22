<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnnounceModel; // Corrected model import

class AnnounceController extends BaseController
{
    public function announcements()
    {
        return view('UserPage/announcements');
    }

    public function addannounce()
    {
        return view('AdminPage/addannounce');
    }

    public function addAnnounceSubmit()
    {
        try {
            $announceModel = new AnnounceModel();
            $images = $this->request->getFiles();
            
            // Check if files were uploaded
            if (empty($images)) {
                return redirect()->back()->withInput()->with('error', 'No file uploaded.'); // Corrected redirection
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
                    return redirect()->back()->withInput()->with('error', 'Error uploading file(s).');
                }
            }
            
            $data = [
                'title' => $this->request->getVar('title'),
                'description' => strip_tags ($this->request->getVar('description')),
                'images' => implode(',', $imageNames),
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s'), 
            ];
            
            // Validate data
            foreach ($data as $key => $value) {
                if (empty($value)) {
                    return redirect()->back()->withInput()->with('error', "Required data '$key' is missing."); 
                }
            }
            
            // Insert data into the database
            if (!$announceModel->insert($data)) { // Corrected model method
                return redirect()->back()->withInput()->with('error', 'Unable to insert data.'); 
            }
            
            // Redirect to 'addnews' page with success message
            return redirect()->to('/announcements')->with('success', 'Announcement created successfully');
        } catch (\Throwable $th) {
            return $this->response->setStatusCode(500)->setJSON(["error" => "Error: " . $th->getMessage()]);
        }
    }

    public function manageannounce()
    {
        
        $announceModel = new AnnounceModel();
        
        $data['announceData'] = $announceModel->findAll(); 

        return view('AdminPage/manageannounce', $data); 
        
    }
}