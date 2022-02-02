<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{   protected $comments;
    public function commentSubmit(Request $request)
    {
       Comment::commentSubmit($request);
        return back()->with('message','Comment Submitted');
    }

    

}
