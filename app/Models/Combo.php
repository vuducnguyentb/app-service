<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Combo
 * 
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $slug
 * @property int|null $product_category_id
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string $status
 * @property string|null $image
 * @property int $quantity
 * @property int $freeship
 * @property string $is_hot
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property ProductCategory|null $product_category
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Combo extends Model
{
	use SoftDeletes;
	protected $table = 'combos';

	protected $casts = [
		'product_category_id' => 'int',
		'quantity' => 'int',
		'freeship' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'code',
		'name',
		'slug',
		'product_category_id',
		'meta_description',
		'meta_keywords',
		'status',
		'image',
		'quantity',
		'freeship',
		'is_hot',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function product_category()
	{
		return $this->belongsTo(ProductCategory::class);
	}

	public function products()
	{
		return $this->belongsToMany(Product::class, 'combo_products')
					->withPivot('created_by', 'updated_by', 'deleted_by', 'deleted_at')
					->withTimestamps();
	}
}
