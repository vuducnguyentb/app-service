<?php


namespace App\Repositories\Slider;


use App\Models\Slider;

class SliderRepository extends \App\Repositories\BaseRepository implements ISliderRepository
{
    public function __construct(Slider $model)
    {
        $this->model = $model;
    }

}
