<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrayCategories = [
            [
                'name' => 'Bạt Người lớn',
                'code' => 'BNL',
                'slug' => 'bnl',
                'meta_description'=>'no name',
                'meta_keywords'=>'no name',
                'status'=>'active',
                'type'=>'product',
            ],
            [
                'name' => 'Bạt Trẻ Em',
                'code' => 'BTE',
                'slug' => 'bte',
                'meta_description'=>'no name',
                'meta_keywords'=>'no name',
                'status'=>'active',
                'type'=>'product',
            ],
            [
                'name' => 'Combo bạt',
                'code' => 'cbbat',
                'slug' => 'cbbat',
                'meta_description'=>'no name',
                'meta_keywords'=>'no name',
                'status'=>'active',
                'type'=>'combo',
            ],
            [
                'name' => 'Combo ghế',
                'code' => 'cbghe',
                'slug' => 'cbghe',
                'meta_description'=>'no name',
                'meta_keywords'=>'no name',
                'status'=>'active',
                'type'=>'combo',
            ],
        ];
        foreach ($arrayCategories as $category){
            ProductCategory::create($category);
        }
    }
}
