<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_all_products()
    {
        // Arrange : créer quelques produits dans la DB
        Product::factory()->count(3)->create();

        // Act : appeler l'endpoint
        $response = $this->getJson('/api/products');

        // Assert : vérifier la réponse
        $response->assertStatus(200)
                 ->assertJsonCount(3); // il doit y avoir 3 produits
    }
}
