<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    protected $categories;
    protected $blogs;
    protected $blog;
    public function addBlog()
    {
        $this->categories = Category::all();
        return view('admin.blog.add-blog', ['categories' => $this->categories]);
    }
    public function newBlog(Request $request)
    {
        Blog::blogCreated($request);
        return redirect()->back()->with('message', 'Blog Created Successfully!');
    }
    public function manageBlog()
    {
        $this->blogs = Blog::all();
        return view('admin.blog.manage-blog', ['blogs' => $this->blogs]);
    }
    public function editBlog($id)
    {
        $this->categories = Category::all();
        $this->blog = Blog::find($id);
        return view('admin.blog.edit-blog', ['blog' => $this->blog, 'categories' => $this->categories]);
    }
    public function updateBlog(Request $request)
    {
        Blog::blogupdated($request);
        return redirect('manage-blog')->with('message', 'Blog Updated Successfully!');
    }
    public function deleteBlog($id)
    {
        $this->blog = Blog::find($id);
        if(file_exists($this->blog->image)){
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return redirect()->back()->with('message', 'Blog Deleted Successfully!');
    }
}

