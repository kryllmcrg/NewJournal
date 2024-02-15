<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoryModel;

class CategoryController extends BaseController
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

    public function manageCategory()
    {
        $categoryModel = new CategoryModel();
        
        $data['categoryData'] = $categoryModel->findAll();
        
        return view('AdminPage/managecategory', $data);
    }

    public function saveCategoryChanges()
    {
        try {
            // Retrieve the category ID and new category name from the request
            $categoryId = $this->request->getPost('id_categories'); // Adjusted to match the attribute name
            $newCategoryName = $this->request->getPost('editCategory');

            // Validate inputs if necessary

            // Update the category in the database
            $categoryModel = new CategoryModel();
            $categoryModel->update($categoryId, ['name' => $newCategoryName]);

            // If successful, return success response
            return $this->response->setJSON(['success' => true, 'message' => 'Category updated successfully']);
        } catch (\Exception $e) {
            // If an error occurs, return error response
            return $this->response->setJSON(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
        }
    }
}
