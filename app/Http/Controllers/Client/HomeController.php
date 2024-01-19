<?php

namespace App\Http\Controllers\Client;

use App\Enums\BaseEnum;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Repositories\Combo\IComboRepository;
use App\Repositories\ListSlider\IListSliderRepository;
use App\Repositories\Post\IPostRepository;
use App\Repositories\Product\IProductRepository;
use App\Repositories\Slider\ISliderRepository;
use Illuminate\Http\Request;

class HomeController extends BaseWebController
{
    protected $postRepository;
    protected $listSliderRepository;
    protected $sliderRepository;
    protected $productRepository;
    protected $comboRepository;

    public function __construct(
        IPostRepository $postRepository,
        IListSliderRepository $listSliderRepository,
        ISliderRepository $sliderRepository,
        IProductRepository $productRepository,
        IComboRepository $comboRepository
    )
    {
        $this->postRepository = $postRepository;
        $this->listSliderRepository = $listSliderRepository;
        $this->sliderRepository = $sliderRepository;
        $this->productRepository = $productRepository;
        $this->comboRepository = $comboRepository;
    }

    public function index()
    {
        $postHomes = $this->postRepository->model()
            ->where('status', BaseEnum::Active)
            ->take(4)
            ->orderBy('created_at', 'ASC')
            ->get();
        $sliders = $this->sliderRepository->model()
            ->where('list_slider_id', 1)
            ->get();
        $comboHots = $this->comboRepository->model()
            ->with(['productPrices', 'productCategory'])
            ->where('status', BaseEnum::Active)
            ->where('is_hot', BaseEnum::IsHot)
            ->orderBy('created_at', 'DESC')
            ->take(4)
            ->get();
        $productHomes = $this->productRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('status', BaseEnum::Active)
            ->orderBy('created_at', 'DESC')
            ->take(8)
            ->get();
        $topCombos = $this->comboRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('status', BaseEnum::Active)
            ->orderBy('created_at', 'ASC')
            ->take(3)
            ->get();
        $topProducts = $this->productRepository->model()
            ->with(['productPrices','productCategory'])
            ->where('status', BaseEnum::Active)
            ->orderBy('created_at', 'ASC')
            ->take(3)
            ->get();
//        $productInCateOnes = $this->productRepository->model()
//            ->with(['productPrices','productCategory'])
//            ->where('status', BaseEnum::Active)
//            ->where('product_category')
//            ->orderBy('created_at', 'ASC')
//            ->take(3)
//            ->get();
        return view('client.home')->with([
            'postHomes' => $postHomes,
            'sliders' => $sliders,
            'comboHots' => $comboHots,
            'productHomes' => $productHomes,
            'topCombos' => $topCombos,
            'topProducts' => $topProducts,
        ]);
    }
}
