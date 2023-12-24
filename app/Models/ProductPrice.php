<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductPrice
 * 
 * @property int $id
 * @property string $auditable_type
 * @property int $auditable_id
 * @property int $price
 * @property int $quantity
 * @property int $day
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class ProductPrice extends Model
{
	use SoftDeletes;
	protected $table = 'product_prices';

	protected $casts = [
		'auditable_id' => 'int',
		'price' => 'int',
		'quantity' => 'int',
		'day' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'auditable_type',
		'auditable_id',
		'price',
		'quantity',
		'day',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
