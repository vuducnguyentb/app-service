<?php


namespace App\Transformers\ListSlider;


use App\Models\ListSlider;

class BaseListSliderTransformer extends \League\Fractal\TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(ListSlider $entry)
    {
        $data = [
            'id'=>$entry->id,
            'name'=>$entry->name,
            'key'=>$entry->key,
            'status'=>$entry->status,
        ];
        return $data;
    }
}
