<?php

namespace App\Http\Controllers\Client;

use App\Enums\BaseEnum;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Repositories\Page\IPageRepository;
use App\Repositories\Post\IPostRepository;
use Illuminate\Http\Request;

class PageClientController extends BaseWebController
{
    protected $pageRepository;
    protected $postRepository;

    public function __construct(
        IPageRepository $pageRepository,
        IPostRepository $postRepository
    )
    {
        $this->pageRepository= $pageRepository;
        $this->postRepository= $postRepository;
    }

    public function getDetail($slug){
        $page = $this->pageRepository->model()
            ->where('slug',$slug)
            ->first();
        $posts = $this->postRepository->model()
            ->where('status',BaseEnum::Active)
            ->orderBy('created_at','DESC')
            ->take(3)
            ->get();
        return view('client.page.detail')->with(
            [
                'page'=>$page,
                'posts'=>$posts,
            ]
        );
    }
}
