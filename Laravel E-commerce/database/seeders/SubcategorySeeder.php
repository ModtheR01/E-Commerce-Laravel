<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCategories;
use Carbon\Carbon;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $subcategory=SubCategories::create([
            'category_id' => 1,
            'title'        => 'Lights',
            'created_at'  => Carbon::now()->toDateTimeString(),
            'updated_at'  => null,
        ]);
    }
}
