<?php

namespace App\Http\Middleware;

use App\Models\Combo;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class CheckComboViews
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
        $combo = Combo::where('slug',$slug)->first();
        $comboSession = $this->getViewedCombo($combo->id);
        if (!is_null($comboSession))
        {
            $timeClear = $this->cleanExpiredViews($comboSession);
            if($timeClear == true){
                $this->removeSessionCombo($combo->id);
            }
        }

        return $next($request);
    }

    /**
     * lấy session key view của sp
     * @param $idCombo
     * @return mixed
     */
    private function getViewedCombo($idCombo)
    {
        return $this->session->get('viewed-combo-'.$idCombo);
    }

    /***
     * check xem thời gian session quá 1p chưa
     * @param $product
     * @return array
     */
    private function cleanExpiredViews($valueComboSession)
    {
        $time = time();
        // Let the views expire after one hour.
        $throttleTime = 60;
        return ($valueComboSession + $throttleTime) > $time;

    }

    #xóa key session đi
    private function removeSessionProduct($idCombo)
    {
        $this->session->forget('viewed-combo-'.$idCombo);
    }
}
