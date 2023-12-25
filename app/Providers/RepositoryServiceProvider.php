<?php


namespace App\Providers;


use App\Repositories\Interfaces\Category\CategoryRepository;
use App\Repositories\Interfaces\Category\ICategoryRepository;

class RepositoryServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {

    }

    public function boot():void
    {
        app()->singleton(ICategoryRepository::class,CategoryRepository::class);
    }
}
