<?php


namespace App\Transformers\Post;


use App\Models\Post;

class ListAdminPostTransformer extends BasePostTransformer
{
    public function transform(Post $entry)
    {
        $data = parent::transform($entry); // TODO: Change the autogenerated stub
        $data['categories'] = $entry->categories;
        return $data;
    }
}
