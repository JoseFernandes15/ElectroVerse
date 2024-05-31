<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ProductBrand;

class ProductBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductBrand::create(
            [
                'name' => 'SONY PLAYSTATION',
            ]);
        ProductBrand::create(
            [
                'name' => 'MICROSOFT XBOX',
            ]);
      
    }
}
