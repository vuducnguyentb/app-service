<?php


namespace App\Transformers\Page;


use App\Models\Page;

class BasePageTransformer extends \League\Fractal\TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected array $defaultIncludes = [
        //
    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected array $availableIncludes = [
        //
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Page $entry)
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
