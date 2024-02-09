<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoryModel;

class AdminController extends BaseController
{
    public function dashboard()
    {
        return view('AdminPage/dashboard');
    }

    public function addcategory()
    {
        if ($this->request->getMethod() === 'post') {
            $categoryModel = new CategoryModel();
            $categoryName = $this->request->getPost('category_name');

            // Insert the new category into the database
            $categoryModel->insert(['name' => $categoryName]);

            // Redirect after adding the category
            return redirect()->to('/addcategory')->with('success', 'Category added successfully.');
        } else {
            return view('AdminPage/addcategory');
        }
    }

    public function getcategory()
    {
        // Load the CategoryModel
        $categoryModel = new CategoryModel();

        // Fetch all categories from the database
        $data['news_categories'] = $categoryModel->findAll();

        return view('home', $data);
    }

    public function managecategory()
    {
        return view('AdminPage/managecategory');
    }
}
