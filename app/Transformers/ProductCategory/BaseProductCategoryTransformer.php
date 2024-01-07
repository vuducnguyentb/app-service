<?php


namespace App\Transformers\ProductCategory;


use App\Models\ProductCategory;

class BaseProductCategoryTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(ProductCategory $entry)
    {
        $data = [
            'id' => $entry->id,
            'code' => $entry->code,
            'name' => $entry->name,
            'slug' => $entry->slug,
            'status' => $entry->status,
            'type' => $entry->type,
            'meta_description'=>$entry->meta_description,
            'meta_keywords'=>$entry->meta_keywords,
        ];
        return $data;
    }
}
