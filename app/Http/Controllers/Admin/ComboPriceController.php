<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Combo\IComboRepository;
use App\Repositories\ProductPrice\IProductPriceRepository;
use Illuminate\Http\Request;

class ComboPriceController extends Controller
{
    protected  $comboRepository;
    protected  $productPriceRepository;

    public function __construct(
        IComboRepository $comboRepository,
        IProductPriceRepository $productPriceRepository
    )
    {
        $this->comboRepository = $comboRepository;
        $this->productPriceRepository = $productPriceRepository;
    }

    public function show($id){
        $combo = $this->comboRepository->find($id);
        $prices = $combo->productPrices? $combo->productPrices->toArray() : [];
        if(!empty($prices)){
            foreach ($prices as $key=>$price){
                unset($prices[$key]['auditable_type']);
                unset($prices[$key]['auditable_id']);
                unset($prices[$key]['created_by']);
                unset($prices[$key]['updated_by']);
                unset($prices[$key]['deleted_by']);
                unset($prices[$key]['deleted_at']);
                unset($prices[$key]['created_at']);
                unset($prices[$key]['updated_at']);
                unset($prices[$key]['day']);
                unset($prices[$key]['id']);
            }
        }
        return view('admin.combo_price.edit')->with(
            [
                'combo'=>$combo,
                'price'=>json_encode($prices),
            ]
        );
    }

    public function update(Request $request,$id)
    {
        $data = $request->all();
        $items = array_values($data['items']);
        $combo = $this->comboRepository->find($id);
        $prices = $combo->productPrices? $combo->productPrices->toArray() : [];
        if($prices){
            $combo->productPrices()->delete();
        }
        foreach ($items as $key=>$item)
        {
            $combo->productPrices()->create($item);
        }
        return \redirect('/admin/combo-prices/'.$id);
    }
}
