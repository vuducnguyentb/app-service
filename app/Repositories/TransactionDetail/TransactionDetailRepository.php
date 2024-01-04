<?php


namespace App\Repositories\TransactionDetail;


use App\Models\TransactionDetail;

class TransactionDetailRepository extends \App\Repositories\BaseRepository implements ITransactionDetailRepository
{
    public function __construct(TransactionDetail $model)
    {
        $this->model = $model;
    }
}
