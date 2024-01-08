<?php


namespace App\Transformers\Product;


use App\Models\Product;

class BaseProductTransformer extends \League\Fractal\TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Product $entry)
    {
        $data = [
            'id'=>$entry->id,
            'name'=>$entry->name,
            'product_category_id'=>$entry->product_category_id,
            'body'=>$entry->body,
            'image'=>$entry->image,
            'slug'=>$entry->slug,
            'meta_description'=>$entry->meta_description,
            'meta_keywords'=>$entry->meta_keywords,
            'status'=>$entry->status,
            'type'=>$entry->type,
            'quantity'=>$entry->quantity,
            'freeship'=>$entry->freeship,
            'is_hot'=>$entry->is_hot,
        ];
        return $data;
    }
}
