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
                'name'=>'Android Version',
                'slug'=>'a',
                'code'=>'a',
                'body'=>'',
                'image'=>'#',
                'quantity'=>20,
                'product_category_id'=>2,
            ],
            [
                'name'=>'Video Tutorial',
                'slug'=>'v',
                'code'=>'b',
                'body'=>'',
                'image'=>'#',
                'quantity'=>15,
                'product_category_id'=>1,
            ],
            [
                'name'=>'Installation',
                'slug'=>'i',
                'code'=>'c',
                'body'=>'',
                'image'=>'#',
                'quantity'=>10,
                'product_category_id'=>2,
            ],
            [
                'name'=>'Usage',
                'slug'=>'u',
                'code'=>'d',
                'body'=>'',
                'image'=>'#',
                'quantity'=>20,
                'product_category_id'=>1,
            ],
            [
                'name'=>'Type of notifications',
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
