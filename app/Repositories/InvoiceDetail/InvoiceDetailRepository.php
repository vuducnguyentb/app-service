<?php


namespace App\Repositories\InvoiceDetail;


use App\Models\InvoiceDetail;

class InvoiceDetailRepository extends \App\Repositories\BaseRepository implements IInvoiceDetailRepository
{
    public function __construct(InvoiceDetail $model)
    {
        $this->model = $model;
    }
}
