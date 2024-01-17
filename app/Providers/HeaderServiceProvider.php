<?php

namespace App\Providers;

use App\Enums\BaseEnum;
use App\Models\Category;
use App\Models\CategoryPost;
use App\Models\ProductCategory;
use Illuminate\Support\ServiceProvider;

class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $headerPostCategories = Category::all();
        $productCategories = ProductCategory::where('type',BaseEnum::TypeProduct)
            ->where('status',BaseEnum::Active)->get();
        $comboCategories = ProductCategory::where('type',BaseEnum::TypeCombo)
            ->where('status',BaseEnum::Active)->get();
        view()->composer('client.layouts.header',
            function ($view) use($productCategories,$comboCategories,$headerPostCategories){
            $view->with([
                'productCategories'=>$productCategories,
                'comboCategories'=>$comboCategories,
                'headerPostCategories'=>$headerPostCategories,
            ]);
        });
    }
}
