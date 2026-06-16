<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Category::insert([
        [
            'name' => 'Jersey Home',
            'description' => 'Jersey kandang tim sepak bola'
        ],
        [
            'name' => 'Jersey Away',
            'description' => 'Jersey tandang tim sepak bola'
        ],
        [
            'name' => 'Jersey Third',
            'description' => 'Jersey ketiga atau alternatif'
        ],
    ]);
}
}
