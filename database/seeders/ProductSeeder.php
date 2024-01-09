<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrayProducts = [
            [
                'name'=>'Bạt nhỏ 2x3',
                'slug'=>'a',
                'code'=>'a',
                'body'=>'',
                'image'=>'#',
                'quantity'=>20,
                'product_category_id'=>2,
            ],
            [
                'name'=>'Bạt to 3x4',
                'slug'=>'v',
                'code'=>'b',
                'body'=>'',
                'image'=>'#',
                'quantity'=>15,
                'product_category_id'=>1,
            ],
            [
                'name'=>'Ghế nhựa',
                'slug'=>'i',
                'code'=>'c',
                'body'=>'',
                'image'=>'#',
                'quantity'=>10,
                'product_category_id'=>2,
            ],
            [
                'name'=>'Bạt trẻ em',
                'slug'=>'u',
                'code'=>'d',
                'body'=>'',
                'image'=>'#',
                'quantity'=>20,
                'product_category_id'=>1,
            ],
            [
                'name'=>'Áo mưa',
                'slug'=>'t',
                'code'=>'e',
                'body'=>'',
                'image'=>'#',
                'quantity'=>20,
                'product_category_id'=>2,
            ]
        ];
        foreach ($arrayProducts as $category){
            Product::create($category);
        }
    }
}
