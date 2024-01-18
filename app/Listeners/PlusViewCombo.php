<?php

namespace App\Listeners;

use App\Events\ComboViews;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Session\Store;

class PlusViewCombo
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
    public function handle(ComboViews $event): void
    {
        $combo = $event->combo;
        if (!$this->isProductViewed($combo->id))
        {
            $combo->increment('views');
            $this->storeProduct($combo->id);
        }
    }

    #kiểm tra xem đã có session theo id của sp hay chưa
    private function isProductViewed($idCombo){
        return $this->session->get('viewed-combo-'.$idCombo);
    }

    #thêm session có dạng key =>value : viewed-product-1 => thời gian dạng timestamp
    private function storeProduct($idCombo):void
    {
        $key = 'viewed-combo-'.$idCombo;
        $this->session->put($key, time());
    }
}
