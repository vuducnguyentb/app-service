<?php


namespace App\Transformers\Combo;


use App\Models\Combo;

class BaseComboTransformer extends \League\Fractal\TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Combo $entry)
    {
        $data = [
            'id'=>$entry->id,
            'title'=>$entry->title,
            'excerpt'=>$entry->excerpt,
            'body'=>$entry->body,
            'image'=>$entry->image,
            'slug'=>$entry->slug,
            'meta_description'=>$entry->meta_description,
            'meta_keywords'=>$entry->meta_keywords,
            'status'=>$entry->status,
            'type'=>$entry->type,
        ];
        return $data;
    }
}
