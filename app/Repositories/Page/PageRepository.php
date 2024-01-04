<?php


namespace App\Repositories\Page;


use App\Models\Page;

class PageRepository extends \App\Repositories\BaseRepository implements IPageRepository
{
    public function __construct(Page $model)
    {
        $this->model = $model;
    }
}
