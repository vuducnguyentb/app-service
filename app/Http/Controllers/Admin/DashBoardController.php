<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Repositories\Combo\IComboRepository;
use App\Repositories\Product\IProductRepository;
use Illuminate\Http\Request;

class DashBoardController extends BaseWebController
{
    protected $comboRepository;
    protected $productRepository;

    public function __construct(
        IComboRepository $comboRepository,
        IProductRepository $productRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->comboRepository = $comboRepository;
    }

    public function index(){
        $product = $this->productRepository->model()->get();
        $combo = $this->comboRepository->model()->get();

        return view('admin.dashboard')->with([
            'countProduct'=>count($product),
            'countCombo'=>count($combo),
        ]);
    }
}
