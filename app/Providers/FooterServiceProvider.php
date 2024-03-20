<?php

namespace App\Providers;

use App\Enums\BaseEnum;
use App\Http\Controllers\Traits\ResultHandlerTrait;
use App\Models\Post;
use App\Repositories\Post\IPostRepository;
use App\Transformers\Post\ListPostFooterTransformer;
use Illuminate\Support\ServiceProvider;

class FooterServiceProvider extends ServiceProvider
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
        $postNewFooters = Post::with('categories')
        ->where('status', BaseEnum::Active)
            ->orderBy('created_at', 'DESC')
            ->take(3)
            ->get();
        if(empty($postNewFooters->toArray())){
            $data = [];
        }else{
            $data = fractal($postNewFooters, new ListPostFooterTransformer())->toArray()['data'];
        }
        view()->composer('client.layouts.footer',
            function ($view) use ($data) {
                $view->with([
                    'postNewFooters' => $data,
                ]);
            });
    }
}
