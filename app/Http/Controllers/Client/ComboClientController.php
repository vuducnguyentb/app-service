<?php

namespace App\Http\Controllers\Client;

use App\Enums\BaseEnum;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComboClientController extends BaseWebController
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
        $categories = $this->categoryRepository->model()
            ->withCount('products')
            ->where('status', BaseEnum::Active)
            ->where('type', BaseEnum::TypeProduct)
            ->get();
        $categoryProduct = $this->categoryRepository->model()
            ->where('slug',$slug)->first();
        $products = $this->productRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('product_category_id',$categoryProduct->id)
            ->paginate(9);
        $latestProducts =$this->productRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('status',BaseEnum::Active)
            ->orderBy('created_at','ASC')
            ->take(3)->get();
        return view('client.product.category')->with([
            'categories'=>$categories,
            'categoryProduct'=>$categoryProduct,
            'products'=>$products,
            'latestProducts'=>$latestProducts,
        ]);
    }

    public function getDetail($slug)
    {
        $product = $this->productRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('slug',$slug)
            ->first();
        $relatedProducts = $this->productRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('product_category_id',$product->productCategory->id)
            ->take(3)
            ->get();
        \event(new ProductViews($product));
        return view('client.product.detail')->with(
            [
                'product'=>$product,
                'relatedProducts'=>$relatedProducts,
            ]
        );
    }
}
