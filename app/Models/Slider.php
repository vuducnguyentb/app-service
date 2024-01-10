<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Slider
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string $image
 * @property int $list_slide_id
 * @property string|null $link
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Slider extends Model
{
	use SoftDeletes;
	protected $table = 'sliders';

	protected $casts = [
		'list_slide_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'image',
		'list_slider_id',
		'link',
		'created_by',
		'updated_by',
		'deleted_by'
	];

    public function listSlider()
    {
        return $this->belongsTo(ListSlider::class);
    }
}
