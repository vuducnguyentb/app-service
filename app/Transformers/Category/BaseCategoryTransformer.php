<?php


namespace App\Transformers\Category;


use App\Models\Category;
use App\Transformers\NoTransformer;
use League\Fractal\TransformerAbstract;

class BaseCategoryTransformer extends TransformerAbstract
{
    public function transform(Category $entry)
    {
        $data = [
            'id' => $entry->id,
            'name' => $entry->name,
            'slug' => $entry->slug,
        ];
        return $data;
    }
}
