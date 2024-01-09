<?php

namespace Database\Seeders;

use App\Models\Combo;
use App\Models\ComboProduct;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComboSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrays = [
            [
                'name'=>'Combo bạt 2x3',
                'slug'=>'a',
                'code'=>'cb2x3',
                'body'=>'',
                'image'=>'',
                'quantity'=>20,
                'product_category_id'=>3,
            ],
            [
                'name'=>'Combo bạt 3x4',
                'slug'=>'v',
                'code'=>'cb3x4',
                'body'=>'',
                'image'=>'#',
                'quantity'=>15,
                'product_category_id'=>3,
            ],
            [
                'name'=>'Combo thứ 7',
                'slug'=>'i',
                'code'=>'cbt7',
                'body'=>'',
                'image'=>'',
                'quantity'=>10,
                'product_category_id'=>4,
            ],
            [
                'name'=>'Combo chủ nhật',
                'slug'=>'u',
                'code'=>'cbcn',
                'body'=>'',
                'image'=>'',
                'quantity'=>20,
                'product_category_id'=>4,
            ],
        ];
        foreach ($arrays as $item){
            $combo = Combo::create($item);
        }
        ComboProduct::insert([
            [
                'combo_id'=> 1,
                'product_id'=> 1,
                'quantity'=>1
            ],
            [
                'combo_id'=> 1,
                'product_id'=> 3,
                'quantity'=>1
            ],
            [
                'combo_id'=> 2,
                'product_id'=> 2,
                'quantity'=>1
            ],
            [
                'combo_id'=> 2,
                'product_id'=> 3,
                'quantity'=>1
            ],
            [
                'combo_id'=> 3,
                'product_id'=> 4,
                'quantity'=>1
            ],
            [
                'combo_id'=> 3,
                'product_id'=> 3,
                'quantity'=>1
            ],
            [
                'combo_id'=> 4,
                'product_id'=> 5,
                'quantity'=>1
            ],
            [
                'combo_id'=> 4,
                'product_id'=> 4,
                'quantity'=>1
            ],
        ]);


    }
}
