<?php

namespace App\Http\Controllers\Client;

use App\Enums\BaseEnum;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Repositories\Product\IProductRepository;
use App\Repositories\ProductCategory\IProductCategoryRepository;
use Illuminate\Http\Request;

class ProductClientController extends BaseWebController
{
    protected $productRepository;
    protected $categoryRepository;

    public function __construct(
        IProductCategoryRepository $categoryRepository,
        IProductRepository $productRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request)
    {
        $categories = $this->categoryRepository->model()
            ->withCount('products')
            ->where('status', BaseEnum::Active)
            ->where('type', BaseEnum::TypeProduct)
            ->get();
        $products = $this->productRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('status',BaseEnum::Active)
            ->paginate(9);
        $latestProducts =$this->productRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('status',BaseEnum::Active)
            ->orderBy('created_at','ASC')
            ->take(3)->get();
        return view('client.product.index')->with(
            [
                'categories'=>$categories,
                'products'=>$products,
                'latestProducts'=>$latestProducts,
            ]);
    }

    public function getCategory($slug)
    {
        return view('client.product.category');
    }

    public function getDetail($slug)
    {
        return view('client.product.detail');
    }
}
