<?php

namespace App\Http\Controllers\Client;

use App\Enums\BaseEnum;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Models\CategoryPost;
use App\Repositories\Category\ICategoryRepository;
use App\Repositories\Combo\IComboRepository;
use App\Repositories\Post\IPostRepository;
use App\Repositories\Product\IProductRepository;
use Illuminate\Http\Request;

class NewController extends BaseWebController
{
    protected $postRepository;
    protected $categoryRepository;
    protected $comboRepository;
    protected $productRepository;

    public function __construct(
        IPostRepository     $postRepository,
        ICategoryRepository $categoryRepository,
        IComboRepository    $comboRepository,
        IProductRepository  $productRepository
    )
    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
        $this->comboRepository = $comboRepository;
        $this->productRepository = $productRepository;

    }

    public function index(Request $request)
    {
        $posts = $this->postRepository->model()
            ->with('categories')
            ->where('status',BaseEnum::Active)
            ->orderBy('created_at','DESC')
            ->paginate(5);
        $randomPosts = $this->postRepository->model()
            ->inRandomOrder()->limit(4)->get();
        $comboViews = $this->comboRepository->model()
            ->select('id', 'name', 'slug', 'image', 'is_hot', 'views')
            ->with('productPrices', 'productCategory')
            ->take(3)->orderBy('views', 'DESC')->get();
        $productViews = $this->productRepository->model()
            ->select('id', 'name', 'slug', 'image', 'is_hot', 'views')
            ->with('productPrices', 'productCategory')
            ->take(3)->orderBy('views', 'DESC')->get();
        return view('client.post.index')->with([
            'posts' => $posts,
            'randomPosts' => $randomPosts,
            'comboViews' => $comboViews,
            'productViews' => $productViews,
        ]);
    }

    public function getCategory($slug)
    {
        $categoryPost = $this->categoryRepository->model()
            ->where('slug', $slug)->first();
        $idPosts = CategoryPost::where('category_id', $categoryPost->id)
            ->get()->pluck('post_id')->toArray();
        $postInCategories = $this->postRepository->model()
            ->whereIn('id',$idPosts)
            ->orderBy('created_at','DESC')
            ->paginate(5);
        $postNotInCategories = $this->postRepository->model()
            ->whereNotIn('id',$idPosts)
            ->orderBy('created_at','DESC')
            ->take(4)->get();
        $comboViews = $this->comboRepository->model()
            ->select('id', 'name', 'slug', 'image', 'is_hot', 'views')
            ->with('productPrices', 'productCategory')
            ->take(3)->orderBy('views', 'DESC')->get();
        $productViews = $this->productRepository->model()
            ->select('id', 'name', 'slug', 'image', 'is_hot', 'views')
            ->with('productPrices', 'productCategory')
            ->take(3)->orderBy('views', 'DESC')->get();
        return view('client.post.category')
            ->with([
                'categoryPost' => $categoryPost,
                'postInCategories' => $postInCategories,
                'postNotInCategories' => $postNotInCategories,
                'comboViews' => $comboViews,
                'productViews' => $productViews,
            ]);
    }

    public function getDetail($slug)
    {
        $post = $this->postRepository->model()
            ->where('slug', $slug)
            ->first();
        $recentPosts = $this->postRepository->model()
            ->where('status', BaseEnum::Active)
            ->where('id', '!=', $post->id)
            ->take(4)
            ->get();
        $postCategories = $this->categoryRepository->model()
            ->get();
        $comboViews = $this->comboRepository->model()
            ->select('id', 'name', 'slug', 'image', 'is_hot', 'views')
            ->with('productPrices', 'productCategory')
            ->take(5)->orderBy('views', 'DESC')->get();
        $productViews = $this->productRepository->model()
            ->select('id', 'name', 'slug', 'image', 'is_hot', 'views')
            ->with('productPrices', 'productCategory')
            ->take(5)->orderBy('views', 'DESC')->get();
        return view('client.post.detail')
            ->with([
                'post' => $post,
                'recentPosts' => $recentPosts,
                'postCategories' => $postCategories,
                'comboViews' => $comboViews,
                'productViews' => $productViews,
            ]);
    }
}
