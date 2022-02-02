<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected static $comment;
    protected static $approveVal ;
    public static function commentSubmit($request)
    {
        self::$comment          = new Comment();
        self::$comment->blog_id   = $request->blog_id;
        self::$comment->name = $request->name;
        self::$comment->email = $request->email;
        self::$comment->comment = $request->comment;
        self::$comment->save();
    }
     
    public static function approveComment($request)
    {
    self::$comment = Comment::find($request->comment_id);
    self::$approveVal =$request->approve;
    
     if(self::$approveVal =='on')
     {
        self::$approveVal=1;
     }
     else 
     {
        self:: $approveVal =0;
     }

     self:: $comment->approve = self::$approveVal;
     self:: $comment->save();
     //return self::$comment;
    }
   

    public function blog ()
    {
        return $this->belongsTo(Blog::class);
    }
    public function user ()
    {
        return $this->belongsTo(User::class);
    }
    

}
