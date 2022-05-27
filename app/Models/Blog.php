<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','title','description','author_image','author','author_description','image'];

    protected static $blog;
    private static $message;

    // Propeerty For Author Image
    protected static $authorImage;
    protected static $authorImageDirectory;
    protected static $authorImageName;
    protected static $authorImageUrl;

    // Propeerty For Blog Image
    protected static $blogImage;
    protected static $blogImageDirectory;
    protected static $blogImageName;
    protected static $blogImageUrl;


    // Method For Author Image
    public static function saveAuthorImage($request)
    {
        self::$authorImage = $request->file('author_image');
        if(self::$authorImage)
        {
            self::$authorImageName = 'Author'.time().'.'.
            self::$authorImage->getClientOriginalExtension();
            self::$authorImageDirectory = 'admin-assets/images/author/';
            self::$authorImage->move(self::$authorImageDirectory, self::$authorImageName);
            self::$authorImageUrl = self::$authorImageDirectory.self::$authorImageName;
            return self::$authorImageUrl;
        }else
        {
            return '';
        }
    }


    // Method For Blog Image
    public static function saveBlogImage($request)
    {
        self::$blogImage = $request->file('image');
        if(self::$blogImage)
        {
            self::$blogImageName = 'Blog'.time().'.'.
            self::$blogImage->getClientOriginalExtension();
            self::$blogImageDirectory = 'admin-assets/images/blog/';
            self::$blogImage->move(self::$blogImageDirectory, self::$blogImageName);
            self::$blogImageUrl = self::$blogImageDirectory.self::$blogImageName;
            return self::$blogImageUrl;
        }
    }

    protected static function blogCreated($request)
    {
        self::saveBlogBasicInfo(new Blog(), $request, self::saveAuthorImage($request),self::saveBlogImage($request));
    }

    protected static function blogUpdated($request)
    {
        self::$blog                 = Blog::find($request->blog_id);
        if($request->file('author_image'))
        {
            if(file_exists(self::$blog->author_image))
            {
                unlink(self::$blog->author_image);
            }
            self::$authorImageUrl = self::saveAuthorImage($request);
        }
        else{
            self::$authorImageUrl = self::$blog->author_image;
        }
        if($request->file('image'))
        {
            if(file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$blogImageUrl = self::saveBlogImage($request);
        }
        else{
            self::$blogImageUrl = self::$blog->image;
        }
        self::saveBlogBasicInfo(self::$blog, $request, self:: $authorImageUrl,self::$blogImageUrl);
    }

    public static function saveBlogBasicInfo($blog, $request, $authorImageUrl,$blogImageUrl)
    {
       
        $blog->category_id        = $request->category_id;
        $blog->title              = $request->title;
        $blog->description        = $request->description;
        $blog->author_image       = $authorImageUrl;
        $blog->author             = $request->author;
        $blog->author_description = $request->author_description;
        $blog->image              = $blogImageUrl;
        $blog->save();
    }


    public static function updateBlogStatus($id)
    {
        self::$blog = Blog::find($id);
        if (self::$blog->status == 0)
        {
            self::$blog->status = 1;
            self::$message = 'Blog approve successfully.';
        }
        else
        {
            self::$blog->status = 0;
            self::$message = 'Blog disapprove successfully.';
        }
        self::$blog->save();
        return self::$message;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments ()
    {
        return $this->hasMany(Comment::class)->where('approve',1);
    }
}
