<?php


namespace App\Repositories\Combo;


use App\Models\Combo;

class ComboRepository extends \App\Repositories\BaseRepository implements IComboRepository
{
    public function __construct(Combo $model)
    {
        $this->model = $model;
    }
}
