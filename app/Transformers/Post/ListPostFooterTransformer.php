<?php


namespace App\Transformers\Post;


use App\Models\Post;
use Carbon\Carbon;

class ListPostFooterTransformer extends BasePostTransformer
{
    public function transform(Post $entry)
    {
        $data =  parent::transform($entry); //
        $data['created_at'] = Carbon::parse($entry->created_at)->format('d-m-Y');
        unset($data['body']);
        unset($data['image']);
        unset($data['meta_description']);
        unset($data['meta_keywords']);
        $data['categories'] = @$entry->categories;
        return $data;
    }
}
