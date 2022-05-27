<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer(['front.home.home','front.login','front.blog.blogdetails','front.register','front.blog.blogs','front.category','front.contact','front.search'], function($view){
            $view->with('categories', Category::all());
        }); 
        
        View::composer(['front.login','front.blog.blogdetails','front.register','front.contact'], function($view){
            $view->with('blogs', Blog::all());
        }); 

        // View::composer(['front.contact'], function($view){
        //     $view->with('blog', Blog::find($id));
        // }); 
        
        
        Paginator::useBootstrap();

    }
}
