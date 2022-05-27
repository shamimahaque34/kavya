<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class KavyaController extends Controller
{   protected $categories;
    protected $blogs;
    // protected $search;

     public function index()
     {     
         $this->categories =Category::all();
        // if(request()->Query('search')){ dd(request()->Query('search'));}
        // $this->search = request()->Query('search');

        // if($this->search)
        // {
           
        //    $this->blogs = Blog::where('title','LIKE','%{$this->search}%')->simplePaginate(1);
        // }
        // else
        // {
        //    $this->blogs=  Blog::orderBy('created_at','DESC')->simplePaginate(3);
        // }
        $this->blogs=  Blog::where('status', 1)->orderBy('created_at','DESC')->Paginate(3);

        return view('front.home.home', ['categories' =>$this->categories,'blogs' => $this->blogs]);
    }
    

}

