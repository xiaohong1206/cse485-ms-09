<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create('vi_VN');

        $categoryIds = Category::pluck('id')->all();

        if ($categoryIds === []) {
            $this->command?->warn('Chua co category — chay CategorySeeder truoc.');
            return;
        }

        // Lấy id category theo tên
        $categories = Category::pluck('id', 'name');

$coreProducts = [

    // Bàn phím
    [
        'category_id' => $categories['Ban phim'],
        'sku' => 'KB-01',
        'name' => 'Keychron K2',
        'price' => 1890000,
        'qty' => 3,
        'description' => null,
    ],
    [
        'category_id' => $categories['Ban phim'],
        'sku' => 'KB-02',
        'name' => 'Akko 3087',
        'price' => 1290000,
        'qty' => 5,
        'description' => null,
    ],
    [
        'category_id' => $categories['Ban phim'],
        'sku' => 'KB-03',
        'name' => 'Leopold FC660M',
        'price' => 2750000,
        'qty' => 2,
        'description' => null,
    ],

    // Chuột
    [
        'category_id' => $categories['Chuot'],
        'sku' => 'MS-01',
        'name' => 'Logitech M331',
        'price' => 290000,
        'qty' => 10,
        'description' => null,
    ],
    [
        'category_id' => $categories['Chuot'],
        'sku' => 'MS-02',
        'name' => 'Razer Viper',
        'price' => 990000,
        'qty' => 4,
        'description' => null,
    ],
    [
        'category_id' => $categories['Chuot'],
        'sku' => 'MS-03',
        'name' => 'Xiaomi Silent',
        'price' => 250000,
        'qty' => 8,
        'description' => null,
    ],

    // Màn hình
    [
        'category_id' => $categories['Man hinh'],
        'sku' => 'MN-01',
        'name' => 'Dell 24 inch',
        'price' => 3200000,
        'qty' => 2,
        'description' => null,
    ],
    [
        'category_id' => $categories['Man hinh'],
        'sku' => 'MN-02',
        'name' => 'LG UltraFine',
        'price' => 8500000,
        'qty' => 1,
        'description' => null,
    ],
];

foreach ($coreProducts as $product) {
    Product::create($product);
}
        // ====== 20 sản phẩm Faker ======
        for ($i = 0; $i < 20; $i++) {
            Product::create([
                'category_id' => $faker->randomElement($categoryIds),
                'sku' => strtoupper($faker->unique()->bothify('FZ-##??')),
                'name' => $faker->words(3, true),
                'price' => $faker->numberBetween(100000, 9000000),
                'qty' => $faker->numberBetween(1, 15),
                'description' => $faker->sentence(12),
            ]);
        }
    }
}