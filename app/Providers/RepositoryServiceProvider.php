<?php


namespace App\Providers;


use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\ICategoryRepository;
use App\Repositories\Post\IPostRepository;
use App\Repositories\Post\PostRepository;

class RepositoryServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {

    }

    public function boot():void
    {
        app()->singleton(ICategoryRepository::class,CategoryRepository::class);
        app()->singleton(IPostRepository::class,PostRepository::class);
    }
}
