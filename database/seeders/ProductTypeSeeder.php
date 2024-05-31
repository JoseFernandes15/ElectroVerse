<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ProductType;


class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductType::create(
            [
                'name' => 'Accessories',
                'description' => 'Acessórios para telémoveis, consolas, tablets e computadores.',
            ]
        );
        ProductType::create(
            [
                'name' => 'Computers',
                'description' => 'Computadores desktop e laptop.',
            ]
        );
        ProductType::create(
            [
                'name' => 'Consoles',
                'description' => 'Consolas de marcas populares, como Playstation, Xbox e Nintendo.',
            ]
        );
        ProductType::create(
            [
                'name' => 'Tablets',
                'description' => null,
            ]
        );
    }
}
