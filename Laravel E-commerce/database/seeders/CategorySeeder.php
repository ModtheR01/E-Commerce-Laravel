<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $category=Category::create([
            'title' => 'Electronics',
            'description' => 'Electronics Category',
            'created_at' => Carbon::now()->toDateString(),
            'updated_at' => null,
        ]);
    }
}
