<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Post[] $posts
 *
 * @package App\Models
 */
class Category extends BaseModel
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'category_posts');
//            ->withPivot('created_by', 'updated_by', 'deleted_by', 'deleted_at');
    }
}
