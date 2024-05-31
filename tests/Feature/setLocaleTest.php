<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class setLocaleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_setLocate_success(): void
    {
        $validLocales = ['en', 'pt', 'es'];

        foreach ($validLocales as $locale) {
            $response = $this->get("/setlocale/{$locale}");

            $response->assertSessionHas('locale', $locale);
            $response->assertRedirect();
        }
    }

    public function test_setLocate_invalid()
    {
        $invalidLocale = 'fr';

        $response = $this->get("/setlocale/{$invalidLocale}");

        $response->assertStatus(400);
        $response->assertSeeText('Invalid locale');
    }
}
