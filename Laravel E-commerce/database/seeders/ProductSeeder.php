<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $product= Products::create([
            'title' => 'Product 1',
            'description' => 'This is product 1',
            'price' => 100,
            'sub_category_id' => 1,
            'available_quantity' => 10,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => null,
        ]);

        $product = Products::create([
            'title' => 'Product 2',
            'description' => 'This is product 2',
            'price' => 500,
            'sub_category_id' => 1,
            'available_quantity' => 20,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => null,
        ]);

        $product = Products::create([
            'title' => 'Product 3',
            'description' => 'This is product 3',
            'price' => 800,
            'sub_category_id' => 1,
            'available_quantity' => 30,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => null,
        ]);


    }
}
