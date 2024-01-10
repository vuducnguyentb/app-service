<?php

namespace Database\Seeders;

use App\Models\ListSlider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrays = [
            [
                'name' => 'SLider Trang chủ',
                'key' => 'slider-home',
            ],
            [
                'name' => 'SLider Trang Tin',
                'key' => 'slider-new',
            ],
        ];
        foreach ($arrays as $array){
            ListSlider::create($array);
        }
    }
}
