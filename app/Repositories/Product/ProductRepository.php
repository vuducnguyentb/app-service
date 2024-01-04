<?php


namespace App\Repositories\Product;


use App\Models\Product;

class ProductRepository extends \App\Repositories\BaseRepository implements IProductRepository
{
    public function __construct(Product $model)
    {
        $this->model = $model;
    }
}
