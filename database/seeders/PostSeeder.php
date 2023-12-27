<?php

namespace Database\Seeders;

use App\Models\CategoryPost;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrayPosts = [
            [
                'title'=>'Android Version',
                'slug'=>'a',
                'excerpt'=>'',
                'body'=>'',
                'image'=>'#',
            ],
            [
                'title'=>'Video Tutorial',
                'slug'=>'v',
                'excerpt'=>'',
                'body'=>'',
                'image'=>'#',
            ],
            [
                'title'=>'Installation',
                'slug'=>'i',
                'excerpt'=>'',
                'body'=>'',
                'image'=>'#',
            ],
            [
                'title'=>'Usage',
                'slug'=>'u',
                'excerpt'=>'',
                'body'=>'',
                'image'=>'#',
            ],
            [
                'title'=>'Type of notifications',
                'slug'=>'t',
                'excerpt'=>'',
                'body'=>'',
                'image'=>'#',
            ]
        ];
        foreach ($arrayPosts as $category){
            $post = Post::create($category);
            CategoryPost::create(
                [
                    'post_id'=>$post->id,
                    'category_id'=>rand(1,4),
                ]
            );
        }
    }
}
