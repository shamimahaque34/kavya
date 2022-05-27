<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Admin\BlogController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Home Page Route
Route::get('/', [
    'uses' => '\App\Http\Controllers\Front\KavyaController@index',
    'as'  => '/',
]);

//Mail Page Route


// Details Page Route
// Route::get('/blog-details/{id}',[
//     'uses' => '\App\Http\Controllers\Front\BlogController@index',
//     'as' => 'blog-details',
// ]);

// Category Page Route
Route::get('/category/{id}',[
    'uses' => '\App\Http\Controllers\Front\CategoryController@index',
    'as' => 'category',
]);


// Contact Page Route
Route::get('/contact',[
    'uses' => '\App\Http\Controllers\Front\ContactController@index',
    'as' => 'contact',
]);

Route::post('/contact-submit',[
    'uses' => '\App\Http\Controllers\Front\ContactController@contactSubmit',
    'as' => 'contact-submit',
]);

//Comment Page Route
Route::post('/comment-submit',[
    'uses' => '\App\Http\Controllers\CommentController@commentSubmit',
    'as' => 'comment-submit',
]);



Route::get('/blogs/{id}',[
    'uses' => '\App\Http\Controllers\Front\BlogController@blogdetails',
    'as'  => 'blog'
]);

Route::get('/blogs',[
    'uses' => '\App\Http\Controllers\Front\BlogController@index',
    'as'  => 'blogs'
]);

Route::get('/search',[
    'uses' => '\App\Http\Controllers\SearchController@search',
    'as'  => 'search'
]);



//Dashboard Route
Route::get('/dashboard', [
    'uses' => '\App\Http\Controllers\Admin\AdminController@index',
    'as'  => 'dashboard',
    'middleware' => ['auth:sanctum', 'verified','superAdmin'],
]);

Route::group(['middleware' =>['auth:sanctum', 'verified','superAdmin']], function (){
    //    category routes
        Route::get('/add-category', [
            'uses' => '\App\Http\Controllers\Admin\CategoryController@addCategory',
            'as'  => 'add-category',
        ]);
        Route::post('/new-category', [
            'uses' => '\App\Http\Controllers\Admin\CategoryController@newCategory',
            'as'  => 'new-category',
        ]);
        Route::get('/manage-category', [
            'uses' => '\App\Http\Controllers\Admin\CategoryController@manageCategory',
            'as'  => 'manage-category',
        ]);
        Route::get('/edit-category/{id}', [
            'uses' => '\App\Http\Controllers\Admin\CategoryController@editCategory',
            'as'  => 'edit-category',
        ]);
        Route::post('/update-category', [
            'uses' => '\App\Http\Controllers\Admin\CategoryController@updateCategory',
            'as'  => 'update-category',
        ]);
        Route::get('/delete-category/{id}', [
            'uses' => '\App\Http\Controllers\Admin\CategoryController@deleteCategory',
            'as'  => 'delete-category',
        ]);



        //    blog routes
        Route::get('/add-blog', [
            'uses' => '\App\Http\Controllers\Admin\BlogController@addBlog',
            'as'  => 'add-blog',
        ]);
        Route::post('/new-blog', [
            'uses' => '\App\Http\Controllers\Admin\BlogController@newBlog',
            'as'  => 'new-blog',
        ]);
        Route::get('/manage-blog', [
            'uses' => '\App\Http\Controllers\Admin\BlogController@manageBlog',
            'as'  => 'manage-blog',
        ]);
        Route::get('/edit-blog/{id}', [
            'uses' => '\App\Http\Controllers\Admin\BlogController@editBlog',
            'as'  => 'edit-blog',
        ]);

        Route::get('/update-status/{id}', [
            'uses'=>'\App\Http\Controllers\Admin\BlogController@updateBlogStatus',
            'as'=>'update-status'
            ]);


        Route::get('/blog-detail/{id}', [
            'uses'=>'\App\Http\Controllers\Admin\BlogController@detail',
            'as'=>'blog-detail'
        ]);

        Route::post('/update-blog', [
            'uses' => '\App\Http\Controllers\Admin\BlogController@updateBlog',
            'as'  => 'update-blog',
        ]);
        Route::get('/delete-blog/{id}', [
            'uses' => '\App\Http\Controllers\Admin\BlogController@deleteBlog',
            'as'  => 'delete-blog',
        ]);
        
        //User Route
        Route::get('/add-user',[
            'uses' => '\App\Http\Controllers\Admin\UserController@addUser',
            'as'   => 'add-user',
         ]);
         Route::post('/new-user',[
            'uses' => '\App\Http\Controllers\Admin\UserController@newUser',
            'as'   => 'new-user',
         ]);
         Route::get('/manage-user',[
            'uses' => '\App\Http\Controllers\Admin\UserController@manageUser',
            'as'   => 'manage-user',
         ]);
         Route::get('/edit-user/{id}',[
            'uses' => '\App\Http\Controllers\Admin\UserController@editUser',
            'as'   => 'edit-user',
         ]);
         Route::post('/update-user',[
            'uses' => '\App\Http\Controllers\Admin\UserController@updateUser',
            'as'   => 'update-user',
         ]);
         Route::get('/delete-user/{id}',[
            'uses' => '\App\Http\Controllers\Admin\UserController@deleteUser',
            'as'   => 'delete-user',
         ]);

        // Contact Routes 
         Route::get('/manage-contact',[
        'uses' => '\App\Http\Controllers\Admin\ContactController@manageContact',
        'as'  => 'manage-contact'
    ]);
       //Comment Routes

       Route::get('/manage-comment', [
        'uses' => '\App\Http\Controllers\Admin\CommentController@manageComment',
        'as'  => 'manage-comment',
    ]);

    Route::post('/comment-approve', [
        'uses' => '\App\Http\Controllers\Admin\CommentController@approveComment',
        'as'  => 'comment-approve',
    ]);
      Route::get('/delete-comment/{id}', [
        'uses' => '\App\Http\Controllers\Admin\CommentController@deleteComment',
        'as'  => 'delete-comment',
    ]);

    });