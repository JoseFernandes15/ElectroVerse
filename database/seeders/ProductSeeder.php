<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(
            [
                'name' => 'Playstation 5 Slim',
                'price' => 549.99,
                'description' => 'Consola Playstation 5 Slim 825 GB ',
                'origin' => 'USA',
                'type' => 3,
                'brand' => 1,
                'color' => "Branco",
                'weight' => 4.5,
                'image' => '/storage/images/play5slim.jpg',
                'quantity' => 100,
                'rating' => 4.5,
                'sale' => true,
                'sale_percentage' => 20.0,
                'additional_info' => 'Características Específicas\n- Disco Rígido: 825 GB SSD\n- Memória RAM: 16GB GDDR6/256-bit\n- Processador: AMD de 8x núcleos Zen 2 a 3.5GHz\n- Conexões: HDMI 2.1\n- Suportes de leitura:4K UHD Blu-ray',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Product::create(
            [
                'name' => 'Xbox Series S',
                'price' => 299.99,
                'description' => 'Consola Xbox Series S (512 GB) ',
                'origin' => 'USA',
                'type' => 3,
                'brand' => 2,
                'color' => "Branco",
                'weight' => 1.93,
                'image' => '/storage/images/xboxs.webp',
                'quantity' => 100,
                'rating' => 3.5,
                'sale' => false,
                'sale_percentage' => null,
                'additional_info' => 'Características Específicas\n- Disco Rígido: 512 GB\n- Memória RAM: 10 GB de memória GDDR6\n- Processador: AMD Zen 2 de 8 núcleos; 3.6 GHz, 3.4 GHz com SMT\n- Conexões: HDMI 2.1, USB 3.1, Wireless 802.11ac dual band, Ethernet\n- Suportes de leitura:Digital',
            ]);
            Product::create(
            [
                'name' => 'Xbox Series X',
                'price' => 499.99,
                'description' => 'Consola Xbox Series X (1 TB) ',
                'origin' => 'USA',
                'type' => 3,
                'brand' => 2,
                'color' => "Preto",
                'weight' => 4.4,
                'image' => '/storage/images/xbox.webp',
                'quantity' => 100,
                'rating' => 4.5,
                'sale' => false,
                'sale_percentage' => null,
                'additional_info' => 'Características Específicas\n- Disco Rígido: 1 TB\n- Memória RAM: 16 GB de memória GDDR6\n- Processador: AMD Zen 2 de 8 núcleos; 3.8 GHz, 3.6 GHz com SMT\n- Conexões: HDMI 2.1, USB 3.1, Wi-Fi, Bluetooth Low Energy, Ethernet\n- Suportes de leitura:Unidade 4K UHD Blu-Ray',
            ]);
            Product::create(
            [
                'name' => 'Comando sem fios DualSense',
                'price' => 69.99,
                'description' => 'Comando sem fios DualSense (PS5)',
                'origin' => 'USA',
                'type' => 1,
                'brand' => 1,
                'color' => "Branco",
                'weight' => 0.28,
                'image' => '/storage/images/dualsense.webp',
                'quantity' => 100,
                'rating' => 5.5,
                'sale' => false,
                'sale_percentage' => null,
                'additional_info' => 'Características Específicas\n- Tipo de acessório: \nOriginal\n- Wireless: Sim\n- Compatibilidade Modelo: PS5\n- Conexões: USB-C\n- Entrada para auscultadores: Sim',
            ],
        );
    }
}
