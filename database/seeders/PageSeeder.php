<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrays = [
            [
                'title'=>'Hướng dẫn làm bạt',
                'slug'=>'huong-dan',
                'excerpt'=>'',
                'body'=>'',
                'image'=>'',
            ],
            [
                'title'=>'Bảng giá cho thuê badangoai.com',
                'slug'=>'bang-gia-cho-thue',
                'excerpt'=>'',
                'body'=>'',
                'image'=>'',
            ],

        ];
        foreach ($arrays as $item){
            $page = Page::create($item);

        }
    }
}
