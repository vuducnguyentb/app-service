<?php


namespace App\Repositories\ProductCategory;


use App\Models\ProductCategory;

class ProductCategoryRepository extends \App\Repositories\BaseRepository implements IProductCategoryRepository
{
    public function __construct(ProductCategory $model)
    {
        $this->model = $model;
    }
}
