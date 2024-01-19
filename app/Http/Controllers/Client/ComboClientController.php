<?php

namespace App\Http\Controllers\Client;

use App\Enums\BaseEnum;
use App\Events\ComboViews;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Repositories\Combo\IComboRepository;
use App\Repositories\Product\IProductRepository;
use App\Repositories\ProductCategory\IProductCategoryRepository;
use Illuminate\Http\Request;

class ComboClientController extends BaseWebController
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

    public function index(Request $request)
    {
        $categories = $this->categoryRepository->model()
            ->withCount('products')
            ->where('status', BaseEnum::Active)
            ->where('type', BaseEnum::TypeCombo)
            ->get();
        $combos = $this->productRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('status',BaseEnum::Active)
            ->paginate(9);
        $latestProducts =$this->productRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('status',BaseEnum::Active)
            ->orderBy('created_at','ASC')
            ->take(3)->get();
        return view('client.combo.index')->with(
            [
                'categories'=>$categories,
                'combos'=>$combos,
                'latestProducts'=>$latestProducts,
            ]);
    }

    public function getCategory($slug)
    {
        $categories = $this->categoryRepository->model()
            ->withCount('products')
            ->where('status', BaseEnum::Active)
            ->where('type', BaseEnum::TypeCombo)
            ->get();
        $categoryProduct = $this->categoryRepository->model()
            ->where('slug',$slug)->first();
        $combos = $this->comboRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('product_category_id',$categoryProduct->id)
            ->paginate(9);
        $latestCombos =$this->comboRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('status',BaseEnum::Active)
            ->orderBy('created_at','ASC')
            ->take(3)->get();
        return view('client.combo.category')->with([
            'categories'=>$categories,
            'categoryProduct'=>$categoryProduct,
            'combos'=>$combos,
            'latestCombos'=>$latestCombos,
        ]);
    }

    public function getDetail($slug)
    {
        $combo = $this->comboRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('slug',$slug)
            ->first();
        $relatedCombos = $this->comboRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('product_category_id',$combo->productCategory->id)
            ->take(3)
            ->get();
        $products = $this->productRepository->model()
            ->with(['productPrices','productCategory'])
            ->take(3)
            ->get();
        \event(new ComboViews($combo));
        return view('client.combo.detail')->with(
            [
                'combo'=>$combo,
                'relatedCombos'=>$relatedCombos,
                'products'=>$products,
            ]
        );
    }
}
