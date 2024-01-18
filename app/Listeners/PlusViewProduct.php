<?php

namespace App\Listeners;

use App\Events\ProductViews;
use App\Models\Product;
use App\Repositories\Product\IProductRepository;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Session\Store;

class PlusViewProduct
{
    protected $session;
    /**
     * Create the event listener.
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Handle the event.
     */
    public function handle(ProductViews $event): void
    {
        $product = $event->product;
        if (!$this->isProductViewed($product->id))
        {
            $product->increment('views');
            $this->storeProduct($product->id);
        }
    }

    #kiểm tra xem đã có session theo id của sp hay chưa
    private function isProductViewed($idProduct){
        return $this->session->get('viewed-product-'.$idProduct);
    }

    #thêm session có dạng key =>value : viewed-product-1 => thời gian dạng timestamp
    private function storeProduct($idProduct):void
    {
        $key = 'viewed-product-'.$idProduct;
        $this->session->put($key, time());
    }
}

