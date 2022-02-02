<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    protected $blogs;
    protected $blog;

    public function blogdetails($id)
    {
        $this->blog = Blog::find($id);
        return view('front.blog.blogdetails', ['blog' => $this->blog]);
    }

    public function index()
    {
        $this->blogs =  Blog::all();
        return view('front.blog.blogs', ['blogs' => $this->blogs]);
    }
}
