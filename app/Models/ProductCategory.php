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
 * Class ProductCategory
 * 
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $slug
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string $status
 * @property string $type
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Combo[] $combos
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class ProductCategory extends Model
{
	use SoftDeletes;
	protected $table = 'product_categories';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'code',
		'name',
		'slug',
		'meta_description',
		'meta_keywords',
		'status',
		'type',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function combos()
	{
		return $this->hasMany(Combo::class);
	}

	public function products()
	{
		return $this->hasMany(Product::class);
	}
}
