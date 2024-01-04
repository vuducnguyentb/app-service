<?php


namespace App\Repositories\Invoice;


use App\Models\Invoice;

class InvoiceRepository extends \App\Repositories\BaseRepository implements IInvoiceRepository
{
    public function __construct(Invoice $model)
    {
        $this->model = $model;
    }
}
