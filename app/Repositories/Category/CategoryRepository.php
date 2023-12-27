<?php


namespace App\Repositories\Category;


use App\Models\Category;
use App\Repositories\Category\ICategoryRepository;

class CategoryRepository extends \App\Repositories\BaseRepository implements ICategoryRepository
{
    public function __construct(Category $model)
    {
        $this->model = $model;
    }
}
