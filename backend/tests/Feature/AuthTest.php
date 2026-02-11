<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_register()
    {
        $response = $this->postJson('/api/register', [
            'fullname' => 'Jean Dupont',
            'age' => 25,
            'poids' => 70.5,
            'taille' => 1.75,
            'niveau' => 'Débutant',
            'email' => 'jean@test.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertStatus(201)
                 ->assertJsonStructure([
                     'message',
                     'access_token',
                     'token_type'
                 ]);

        $this->assertDatabaseHas('users', [
            'email' => 'jean@test.com'
        ]);
    }

    /** @test */
    public function register_fails_with_invalid_data()
    {
        $response = $this->postJson('/api/register', []);

        $response->assertStatus(422);
    }

    /** @test */
    public function user_can_login()
    {
        $user = User::factory()->create([
            'password' => bcrypt('password')
        ]);

        $response = $this->postJson('/api/login', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'message',
                     'access_token',
                     'token_type'
                 ]);
    }

    /** @test */
    public function login_fails_with_wrong_password()
    {
        $user = User::factory()->create([
            'password' => bcrypt('password')
        ]);

        $response = $this->postJson('/api/login', [
            'email' => $user->email,
            'password' => 'wrongpassword'
        ]);

        $response->assertStatus(401);
    }

    /** @test */
    public function authenticated_user_can_logout()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $response = $this->postJson('/api/logout');

        $response->assertStatus(200)
                 ->assertJson([
                     'message' => 'Déconnecté avec succès'
                 ]);
    }
}
