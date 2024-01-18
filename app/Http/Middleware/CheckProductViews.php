<?php

namespace App\Http\Middleware;

use App\Models\Product;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class CheckProductViews
{
    private $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $slug = Str::afterLast($request->url(),'/');
        $product = Product::where('slug',$slug)->first();
        $productSession = $this->getViewedProduct($product->id);
        if (!is_null($productSession))
        {
            $timeClear = $this->cleanExpiredViews($productSession);
            if($timeClear == true){
                $this->removeSessionProduct($product->id);
            }
        }

        return $next($request);
    }

    /**
     * lấy session key view của sp
     * @param $idProduct
     * @return mixed
     */
    private function getViewedProduct($idProduct)
    {
        return $this->session->get('viewed-product-'.$idProduct);
    }

    /***
     * check xem thời gian session quá 1p chưa
     * @param $product
     * @return array
     */
    private function cleanExpiredViews($valueProductSession)
    {
        $time = time();
        // Let the views expire after one hour.
        $throttleTime = 60;
        return ($valueProductSession + $throttleTime) > $time;

    }

    #xóa key session đi
    private function removeSessionProduct($idProduct)
    {
        $this->session->forget('viewed-product-'.$idProduct);
    }
}
