<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrays = [
            [
                'username' => 'nguyenvdtb93',
                'email'=>'nguyenvdtb93@gmail.com',
                'is_user' => '1',
                'password'=>bcrypt('123456$q'),
            ],
            [
                'username' => 'cuongnd',
                'email'=>'cuongnd@gmail.com',
                'is_user' => '1',
                'password'=>bcrypt('123456$q'),
            ],
        ];
        foreach ($arrays as $array){
            User::create($array);
        }
    }
}
