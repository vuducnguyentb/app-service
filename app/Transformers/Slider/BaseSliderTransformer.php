<?php


namespace App\Transformers\Slider;


use App\Models\Slider;

class BaseSliderTransformer extends \League\Fractal\TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Slider $entry)
    {
        $data = [
            'id'=>$entry->id,
            'code'=>$entry->code,
            'name'=>$entry->name,
            'slug'=>$entry->slug,
            'quantity'=>$entry->quantity,
            'excerpt'=>$entry->excerpt,
            'freeship'=>$entry->freeship,
            'is_hot'=>$entry->is_hot,
            'product_category_id'=>$entry->product_category_id,
            'body'=>$entry->body,
            'image'=>$entry->image,
            'meta_description'=>$entry->meta_description,
            'meta_keywords'=>$entry->meta_keywords,
            'status'=>$entry->status,
            'type'=>$entry->type,
        ];
        return $data;
    }
}
