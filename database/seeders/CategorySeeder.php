<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['name' => 'Chuot', 'description' => 'Chuot may tinh'],
            ['name' => 'Ban phim', 'description' => 'Ban phim co / membrane'],
            ['name' => 'Man hinh', 'description' => 'Monitor'],
        ];

        foreach ($items as $item) {
            Category::create($item);
        }
    }
}