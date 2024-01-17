<?php

namespace App\Http\Controllers\Client;

use App\Enums\BaseEnum;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Repositories\Category\ICategoryRepository;
use App\Repositories\Post\IPostRepository;
use Illuminate\Http\Request;

class NewController extends BaseWebController
{
    protected $postRepository;
    protected $categoryRepository;

    public function __construct(
        IPostRepository $postRepository,
        ICategoryRepository $categoryRepository
    )
    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request){
        $posts = $this->postRepository->model()
            ->with('categories')
            ->where('status',BaseEnum::Active)
            ->paginate(5);
        return view('client.post.index')->with([
            'posts'=>$posts
        ]);
    }

    public function getDetail($slug){
        return view('client.post.detail');
    }
}
