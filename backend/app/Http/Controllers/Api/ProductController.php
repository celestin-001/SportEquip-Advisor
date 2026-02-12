<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @OA\Tag(
 *     name="Products",
 *     description="Endpoints pour gérer les produits"
 * )
 */
class ProductController extends Controller
{
    // Récupérer tous les produits
    /**
     * @OA\Get(
     *     path="/products",
     *     tags={"Products"},
     *     summary="Récupérer tous les produits",
     *     @OA\Response(response=200, description="Liste de tous les produits")
     * )
     */

    public function index(Request $request)
    {
         $query = Product::query();
     
        // Filtre sports
         if ($request->has('sports') && !empty($request->sports)) {
             $sportIds = explode(',', $request->sports);
             $query->whereIn('sport_id', $sportIds);
         }
     
        // Filtre prix max
         if ($request->has('max_price') && !empty($request->max_price)) {
             $query->where('prix', '<=', $request->max_price);
         }

        // Filtre niveaux
        if ($request->has('levels')) {
            $levels = explode(',', $request->levels);
            $query->whereIn('niveau', $levels);
        }

        // Filtre fréquence d'entrainement
        if ($request->has('frequencies') && !empty($request->frequencies)) {
            $frequencies = explode(',', $request->frequencies);
            $query->whereIn('frequence_semaine', $frequencies);
        }
        
         return response()->json($query->get(), 200);
         
    }
     

    // Récupérer les produits par sport
    /**
     * @OA\Get(
     *     path="/products/sport/{sport_id}",
     *     tags={"Products"},
     *     summary="Récupérer les produits par sport",
     *     @OA\Parameter(
     *         name="sport_id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Liste des produits pour un sport donné")
     * )
     */
    public function bySport($sportId)
    {
        $products = Product::where('sport_id', $sportId)->get();
        return response()->json($products, 200);
    }

    // Récupérer les produits selon le sport de l'utilisateur connecté
     /**
     * @OA\Get(
     *     path="/products/user-sport",
     *     tags={"Products"},
     *     summary="Récupérer les produits correspondant au sport de l'utilisateur",
     *     security={{"sanctum": {}}},
     *     @OA\Response(response=200, description="Liste des produits")
     * )
     */
    public function byUserSport()
    {
        $user = Auth::user();
        if (!$user || !$user->sport_id) {
            return response()->json(['message' => 'Sport non défini pour l\'utilisateur'], 400);
        }
        $products = Product::where('sport_id', $user->sport_id)->get();
        return response()->json($products, 200);
    }
}
