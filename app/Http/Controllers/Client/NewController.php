<?php

namespace App\Http\Controllers\Client;

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

    }

    public function getDetail($slug){
        return view('client.post.detail');
    }
}
