<?php


namespace App\Repositories\Interfaces\Category;


use App\Models\Category;

class CategoryRepository extends \App\Repositories\BaseRepository implements ICategoryRepository
{
    public function __construct(Category $model)
    {
        $this->model = $model;
    }
}
