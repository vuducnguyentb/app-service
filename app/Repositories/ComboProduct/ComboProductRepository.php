<?php


namespace App\Repositories\ComboProduct;


use App\Models\ComboProduct;

class ComboProductRepository extends \App\Repositories\BaseRepository implements IComboProductRepository
{
    public function __construct(ComboProduct $model)
    {
        $this->model = $model;
    }
}
