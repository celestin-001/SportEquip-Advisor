<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SportController;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



// Produits
Route::get('products', [ProductController::class, 'index']); // Tous les produits
Route::get('products/sport/{sport}', [ProductController::class, 'bySport']); // Produits par sport
Route::middleware('auth:sanctum')->get('products/user-sport', [ProductController::class, 'byUserSport']); // Produits par sport de l'utilisateur

// Sports
Route::get('sports', [SportController::class, 'index']); // Tous les sports

// Auth
Route::post('register', [AuthController::class, 'register']); // Inscription
Route::post('login', [AuthController::class, 'login']); // Connexion
Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']); // Déconnexion


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
