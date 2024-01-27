<?php

namespace App\Http\Controllers\Client;

use App\Enums\BaseEnum;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Repositories\Combo\IComboRepository;
use App\Repositories\Product\IProductRepository;
use App\Repositories\ProductCategory\IProductCategoryRepository;
use Illuminate\Http\Request;

class SearchProductController extends BaseWebController
{
    protected $productRepository;
    protected $categoryRepository;
    protected $comboRepository;

    public function __construct(
        IProductCategoryRepository $categoryRepository,
        IProductRepository $productRepository,
        IComboRepository $comboRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->comboRepository = $comboRepository;
    }

    public function searchProduct(Request $request){
        $data = $request->all();
        $searchWord = $data['searchWord'];
        $categories = $this->categoryRepository->model()
            ->withCount('products')
            ->where('status', BaseEnum::Active)
            ->where('type', BaseEnum::TypeProduct)
            ->get();
        $products = $this->productRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('name','like','%'.$searchWord.'%')
            ->where('status',BaseEnum::Active)
            ->paginate(9);
        $latestProducts =$this->productRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('status',BaseEnum::Active)
            ->orderBy('created_at','ASC')
            ->take(3)->get();
        return view('client.search.product')->with(
            [
                'keySearch'=>$searchWord,
                'categories'=>$categories,
                'products'=>$products,
                'latestProducts'=>$latestProducts,
            ]);
    }
}
