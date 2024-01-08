<?php

namespace App\Http\Controllers\Admin;

use App\Enums\BaseEnum;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Models\ProductPrice;
use App\Repositories\Product\IProductRepository;
use App\Repositories\ProductPrice\IProductPriceRepository;
use Illuminate\Http\Request;

class ProductPriceController extends BaseWebController
{
    protected  $productRepository;
    protected  $productPriceRepository;

    public function __construct(
        IProductRepository $productRepository,
        IProductPriceRepository $productPriceRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->productPriceRepository = $productPriceRepository;
    }

    public function show($id){
        $product = $this->productRepository->find($id);
        $prices = $product->productPrices? $product->productPrices->toArray() : [];
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
        return view('admin.product_price.edit')->with(
          [
            'product'=>$product,
            'price'=>json_encode($prices),
          ]
        );
    }

    public function update(Request $request,$id)
    {
        $data = $request->all();
        $items = array_values($data['items']);
        $product = $this->productRepository->find($id);
        $prices = $product->productPrices? $product->productPrices->toArray() : [];
        if($prices){
            $product->productPrices()->delete();
        }
        foreach ($items as $key=>$item)
        {
            $product->productPrices()->create($item);
        }

        return \redirect('/admin/product-prices/'.$id);
    }
}
//        foreach ($items as $key=>$item){
//            ProductPrice::create([
//                'auditable_type'=>BaseEnum::TypeProduct,
//                'auditable_id'=>$id,
//                'price'=>(int)$item['price'],
//                'quantity'=>(int)$item['quantity'],
//                'day'=>'9',
//            ]);
//        }
