<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Middleware\GetLocale;
use Illuminate\Http\Request;

class getLocaleMiddlewareTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_valid_session_locale()
    {
        // Define o locale válido na sessão
        session(['locale' => 'en']);

        // Cria uma instância do middleware
        $middleware = new GetLocale();

        // Cria uma instância do Request
        $request = new Request();

        // Chama o método handle do middleware
        $response = $middleware->handle($request, function ($request) {
            return $request;
        });

        // Verifica se o locale foi configurado corretamente
        $this->assertEquals('en', app()->getLocale());
    }

    /** @test */
    public function test_invalid_session_locale()
    {
        // Define um locale inválido na sessão
        session(['locale' => 'fr']);

        // Cria uma instância do middleware
        $middleware = new GetLocale();

        // Cria uma instância do Request
        $request = new Request();

        // Chama o método handle do middleware
        $response = $middleware->handle($request, function ($request) {
            return $request;
        });

        // Verifica se o locale não foi alterado
        $this->assertNotEquals('fr', app()->getLocale());
    }
}
