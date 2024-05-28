<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_type')->insert([
            [
                'name' => 'Accessories',
                'description' => 'Acessórios para telémoveis, consolas, tablets e computadores.',
            ],
            [
                'name' => 'Computers',
                'description' => 'Computadores desktop e laptop.',
            ],
            [
                'name' => 'Consoles',
                'description' => 'Consolas de marcas populares, como Playstation, Xbox e Nintendo.',
            ],
            [
                'name' => 'Tablets',
                'description' => null,
            ],
        ]);
    }
}
