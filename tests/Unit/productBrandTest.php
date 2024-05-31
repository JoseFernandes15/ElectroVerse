<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\ProductBrand;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class productBrandTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_product_brand()
    {
        $productBrand = ProductBrand::factory()->create([
            'name' => 'Sample Brand',
        ]);

        $this->assertDatabaseHas('product_brand', [
            'name' => 'Sample Brand',
        ]);
    }

    public function test_update_product_brand()
    {
        $productBrand = ProductBrand::factory()->create();
        $newData = [
            'name' => 'Updated Product Brand Name',
        ];

        $productBrand->update($newData);

        $this->assertEquals('Updated Product Brand Name', $productBrand->name);
    }

    public function test_delete_product_brand()
    {
        $productBrand = ProductBrand::factory()->create();
        $productBrandId = $productBrand->id;

        $productBrand->delete();

        $this->assertNull(ProductBrand::find($productBrandId));
    }

    public function test_many_products()
    {
        $productBrand = ProductBrand::factory()->create();
        $products = Product::factory()->count(3)->create(['brand' => $productBrand->id]);

        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Collection::class, $productBrand->products);
        $this->assertCount(3, $productBrand->products);
        $this->assertTrue($productBrand->products->contains($products->first()));
    }
}