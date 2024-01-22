<?php


namespace App\Models;


use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class BaseModel extends \Illuminate\Database\Eloquent\Model
{
    use SoftDeletes;
    use Userstamps;
}
