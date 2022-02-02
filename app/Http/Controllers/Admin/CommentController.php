<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    protected $comments;
    protected $comment;

    public function manageComment()
    {
        $this->comments = Comment::all();
        return view('admin.comment.comment', ['comments' => $this->comments]);
    }

    public function approveComment(Request $request)
    {
        Comment::approveComment($request);
        return redirect()->back();
    }
    public function deleteComment($id)
    {
        $this->comment = Comment::find($id);
        $this->comment->delete();
        return redirect()->back()->with('message', 'Comment Deleted Successfully!');
    }
}
