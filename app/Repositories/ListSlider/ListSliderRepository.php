<?php


namespace App\Repositories\ListSlider;


use App\Models\ListSlider;

class ListSliderRepository extends \App\Repositories\BaseRepository implements IListSliderRepository
{
    public function __construct(ListSlider $model)
    {
        $this->model = $model;
    }
}
