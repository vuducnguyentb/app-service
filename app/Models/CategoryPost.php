<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CategoryPost
 * 
 * @property int $post_id
 * @property int $category_id
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property string|null $deleted_at
 * 
 * @property Category $category
 * @property Post $post
 *
 * @package App\Models
 */
class CategoryPost extends Model
{
	use SoftDeletes;
	protected $table = 'category_posts';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'post_id' => 'int',
		'category_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function post()
	{
		return $this->belongsTo(Post::class);
	}
}
