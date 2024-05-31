<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductType;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        $productType = ProductType::factory()->create();
        $productBrand = ProductBrand::factory()->create();

       return [
        'name' => $this->faker->word,
        'price' => $this->faker->randomFloat(2, 1, 1000),
        'description' => $this->faker->sentence,
        'origin' => $this->faker->country,
        'type' => $productType->id,
        'brand' => $productBrand->id,
        'color' => $this->faker->colorName,
        'weight' => $this->faker->randomFloat(2, 0.1, 10),
        'quantity' => $this->faker->numberBetween(1, 100),
        'image' => $this->faker->imageUrl,
        'sale' => $this->faker->boolean,
        'sale_percentage' => $this->faker->numberBetween(0, 100),
        'additional_info' => $this->faker->sentence,
    ];
    }
}
