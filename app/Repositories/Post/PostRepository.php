<?php


namespace App\Repositories\Post;


use App\Models\Post;

class PostRepository extends \App\Repositories\BaseRepository implements IPostRepository
{
    public function __construct(Post $model)
    {
        $this->model = $model;
    }
}
