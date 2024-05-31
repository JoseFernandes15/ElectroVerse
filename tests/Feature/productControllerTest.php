<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductType;


class productControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_home_page_content()
    {
        $type = ProductType::create(['name' => 'Accessories']);
        $accessories = Product::factory()->count(8)->create(['type' => $type->id]);
        $populares = Product::factory()->count(8)->create(['rating' => 5]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewHas('accessories');
        $response->assertViewHas('populares');
    }

    public function test_shop_page_content()
    {
        $products = Product::factory()->count(5)->create();
        $brands = ProductBrand::factory()->count(3)->create();

        $response = $this->get('/shop');

        $response->assertStatus(200);
        $response->assertViewHas('products');
        $response->assertViewHas('brands');
    }

    public function test_shop_by_categorie_page_content()
    {
        $type = ProductType::create(['name' => 'Category1']);
        $products = Product::factory()->count(5)->create(['type' => $type->id]);
        $brands = ProductBrand::factory()->count(3)->create();
    
        $response = $this->get('/shop/Category1');

        $response->assertStatus(200);
        $response->assertViewHas('products');
        $response->assertViewHas('brands');
    }

    public function test_product_page_content()
    {

        $product = Product::factory()->create();

        $response = $this->get('/product/' . $product->id);

        $response->assertStatus(200);
        $response->assertViewHas('product');
    }
}
