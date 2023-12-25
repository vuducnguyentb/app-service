<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrayCategories = [
            [
                'name' => 'Hướng dẫn',
                'slug' => 'hd',
            ],
            [
                'name' => 'Sự kiện',
                'slug' => 'sk',
            ],
            [
                'name' => 'Ưu đãi',
                'slug' => 'ud',
            ],
            [
                'name' => 'Tin mới',
                'slug' => 'tm',
            ],
        ];
        foreach ($arrayCategories as $category){
            Category::create($category);
        }
    }
}
