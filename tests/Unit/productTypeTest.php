<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\ProductType;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class productTypeTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_product_type()
    {
        $productType = ProductType::factory()->create([
            'name' => 'Sample Type',
            'description' => null,
        ]);

        $this->assertDatabaseHas('product_type', [
            'name' => 'Sample Type',
        ]);
    }

    public function test_update_product_type()
    {
        $productType = ProductType::factory()->create();
        $newData = [
            'name' => 'Updated Product Type Name',
            'description' => 'Updated description for the product type',
        ];

        $productType->update($newData);

        $this->assertEquals('Updated Product Type Name', $productType->name);
        $this->assertEquals('Updated description for the product type', $productType->description);
    }

    public function test_delete_product_type()
    {
        $productType = ProductType::factory()->create();
        $productTypeId = $productType->id;

        $productType->delete();

        $this->assertNull(ProductType::find($productTypeId));
    }

    public function test_many_products()
    {
        $productType = ProductType::factory()->create();
        $products = Product::factory()->count(3)->create(['type' => $productType->id]);

        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Collection::class, $productType->products);
        $this->assertCount(3, $productType->products);
        $this->assertTrue($productType->products->contains($products->first()));
    }
}
