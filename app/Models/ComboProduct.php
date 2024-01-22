<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ComboProduct
 *
 * @property int $combo_id
 * @property int $product_id
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Combo $combo
 * @property Product $product
 *
 * @package App\Models
 */
class ComboProduct extends BaseModel
{
	protected $table = 'combo_products';
	public $incrementing = false;

	protected $casts = [
		'combo_id' => 'int',
		'product_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function combo()
	{
		return $this->belongsTo(Combo::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
