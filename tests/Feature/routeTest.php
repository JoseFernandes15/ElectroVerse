<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class routeTest extends TestCase
{
    public function get_home(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function get_shop(): void
    {
        $response = $this->get('/shop');

        $response->assertStatus(200);
    }

    public function get_shop_cat(): void
    {
        $response = $this->get('/shop/Accessories');

        $response->assertStatus(200);
    }

    public function get_product(): void
    {
        $response = $this->get('/product/1');

        $response->assertStatus(200);
    }
}
