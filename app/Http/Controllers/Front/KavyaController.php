<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class KavyaController extends Controller
{   protected $categories;
    protected $blogs;
     public function index(){
         $this->categories =Category::all();
        $this->blogs =  Blog::orderBy('created_at','DESC')->take(3)->get();
        return view('front.home.home', ['categories' =>$this->categories,'blogs' => $this->blogs]);
    }
}
