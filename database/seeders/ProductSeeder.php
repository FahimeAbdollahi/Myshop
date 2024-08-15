<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Sample Product 1',
            'description' => 'This is a sample product.',
            'price' => 100,
            'category_id' => 1, // Make sure this category exists
            'seller_id' => 1, // Make sure this seller exists
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'description' => 'This is another sample product.',
            'price' => 200,
            'category_id' => 1,
            'seller_id' => 1,
        ]);
    }
}
