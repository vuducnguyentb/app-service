<?php


namespace App\Transformers\Category;


use App\Models\Category;

class ListAdminCategoryTransformer extends BaseCategoryTransformer
{
    public function transform(Category $entry)
    {
        $data = parent::transform($entry);
        return $data;
    }
}
