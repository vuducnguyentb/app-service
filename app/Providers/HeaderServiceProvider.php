<?php

namespace App\Providers;

use App\Enums\BaseEnum;
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
        $productCategories = ProductCategory::where('type',BaseEnum::TypeProduct)
            ->where('status',BaseEnum::Active)->get();
        $comboCategories = ProductCategory::where('type',BaseEnum::TypeCombo)
            ->where('status',BaseEnum::Active)->get();
        view()->composer('client.layouts.header',function ($view) use($productCategories,$comboCategories){
            $view->with([
                'productCategories'=>$productCategories,
                'comboCategories'=>$comboCategories,
            ]);
        });
    }
}
