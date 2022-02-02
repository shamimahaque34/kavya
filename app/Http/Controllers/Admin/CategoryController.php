<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    protected $categories;
    protected $category;

    public function addCategory()
    {
        return view('admin.category.add-category');
    }

    public function newCategory(Request $request)
    {
        Category::categoryCreated($request);
        return redirect()->back()->with('message', 'Category Created Successfully!');
    }

    public function manageCategory()
    {
        $this->categories = Category::all();
        return view('admin.category.manage-category', ['categories' => $this->categories]);
    }

    public function editCategory($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit-category', ['category' => $this->category]);
    }

    public function updateCategory(Request $request)
    {
        Category::categoryUpdated($request);
        return redirect('manage-category')->with('message', 'Category Updated Successfully!');
    }

    public function deleteCategory($id)
    {
        $this->category = Category::find($id);
        $this->category->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully!');
    }
}
