<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;


class SearchController extends Controller
{
     protected $search;
    protected $blogs;

    public function search(Request $request)
    {
        $this->search = $request->input('search');
        $this->blogs = Blog::query()
            ->where('title', 'LIKE', "%{$this->search}%")
            ->simplePaginate(1);
        return view('front.search', ['blogs' => $this->blogs]);
    }
}
