<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;


class productTest extends TestCase
{
     use RefreshDatabase;

     
    public function test_create_product()
    {
        $type = ProductType::factory()->create();

        $brand = ProductBrand::factory()->create();

        $product = Product::factory()->create([
            'name' => 'Sample Product',
            'price' => 99.99,
            'description' => 'This is a sample product',
            'origin' => 'USA',
            'type' => $type->id,
            'brand' => $brand->id,
            'color' => 'Red',
            'weight' => 1.5,
            'quantity' => 100,
            'image' => 'sample.jpg',
            'sale' => false,
            'sale_percentage' => 0,
            'additional_info' => 'Some additional info',
        ]);

        $this->assertDatabaseHas('product', [
            'name' => 'Sample Product',
            'price' => 99.99,
        ]);
    }

    public function test_update_product()
    {
        $product = Product::factory()->create();
        $newData = [
            'name' => 'Updated Product Name',
            'price' => 200.00,
        ];

        $product->update($newData);

        $this->assertEquals('Updated Product Name', $product->name);
        $this->assertEquals(200.00, $product->price);
    }

    public function test_delete_product()
    {
        $product = Product::factory()->create();
        $productId = $product->id;

        $product->delete();

        $this->assertNull(Product::find($productId));
    }

    public function test_product_type()
    {
        $type = ProductType::factory()->create();
        $product = Product::factory()->create(['type' => $type->id]);

        $this->assertTrue($product->type()->exists());
    }

    public function test_product_brand()
    {
        $brand = ProductBrand::factory()->create();
        $product = Product::factory()->create(['brand' => $brand->id]);

        $this->assertTrue($product->brand()->exists());
    }
}

