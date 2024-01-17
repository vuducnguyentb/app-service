<?php

namespace App\Http\Controllers\Client;

use App\Enums\BaseEnum;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Repositories\Post\IPostRepository;
use Illuminate\Http\Request;

class HomeController extends BaseWebController
{
    protected $postRepository;

    public function __construct(IPostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $postHomes = $this->postRepository->model()
            ->where('status',BaseEnum::Active)
            ->take(4)
            ->orderBy('created_at','ASC')
            ->get();
        return view('client.home')->with([
            'postHomes'=>$postHomes
        ]);
    }
}
