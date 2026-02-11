<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sport;

/**
 * @OA\Tag(
 *     name="Sports",
 *     description="Endpoints pour les sports"
 * )
 */
class SportController extends Controller
{
     /**
     * @OA\Get(
     *     path="/api/sports",
     *     tags={"Sports"},
     *     summary="Récupérer tous les sports",
     *     @OA\Response(response=200, description="Liste de tous les sports")
     * )
     */
    public function index()
    {
        return response()->json(Sport::all(), 200);
    }
}
