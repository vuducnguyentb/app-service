<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ListSlider
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $key
 * @property string $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class ListSlider extends Model
{
	use SoftDeletes;
	protected $table = 'list_sliders';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'name',
		'key',
		'status',
		'created_by',
		'updated_by',
		'deleted_by'
	];

    public function sliders()
    {
        return $this->hasMany(Slider::class);
    }
}
