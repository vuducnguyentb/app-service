<?php

namespace App\Http\Controllers\Client;

use App\Enums\BaseEnum;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Models\CategoryPost;
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
        $randomPosts = $this->postRepository->model()
            ->inRandomOrder()->limit(4)->get();
        return view('client.post.index')->with([
            'posts'=>$posts,
            'randomPosts'=>$randomPosts,
        ]);
    }

    public function getCategory($slug){
        $categoryPost = $this->categoryRepository->model()
            ->where('slug',$slug)->first();
        $idPosts = CategoryPost::where('category_id',$categoryPost->id)
            ->get()->pluck('post_id')->toArray();
        $postInCategories = $this->postRepository->model()
            ->whereIn('id',$idPosts)->paginate(5);
        $postNotInCategories = $this->postRepository->model()
            ->whereNotIn('id',$idPosts)->take(4)->get();
        return view('client.post.category')
            ->with([
            'categoryPost'=>$categoryPost,
            'postInCategories'=>$postInCategories,
            'postNotInCategories'=>$postNotInCategories,
        ]);
    }

    public function getDetail($slug){
        return view('client.post.detail');
    }
}
