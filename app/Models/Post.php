<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * 
 * @property int $id
 * @property int $author_id
 * @property string $title
 * @property string|null $excerpt
 * @property string|null $body
 * @property string|null $image
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
 * @package App\Models
 */
class Post extends Model
{
	use SoftDeletes;
	protected $table = 'posts';

	protected $casts = [
		'author_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'author_id',
		'title',
		'excerpt',
		'body',
		'image',
		'slug',
		'meta_description',
		'meta_keywords',
		'status',
		'type',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
