<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * @OA\Tag(
 *     name="Auth",
 *     description="Endpoints pour la gestion des utilisateurs"
 * )
 */
class AuthController extends Controller
{
    /**
     * @OA\Post(
     *     path="/register",
     *     tags={"Auth"},
     *     summary="Créer un nouvel utilisateur",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"fullname","email","password","password_confirmation"},
     *             @OA\Property(property="fullname", type="string", example="Jean Dupont"),
     *             @OA\Property(property="age", type="integer", example=25),
     *             @OA\Property(property="poids", type="number", format="float", example=70.5),
     *             @OA\Property(property="taille", type="number", format="float", example=1.75),
     *             @OA\Property(property="niveau", type="string", example="Débutant"),
     *             @OA\Property(property="sport_id", type="integer", example=1),
     *             @OA\Property(property="email", type="string", format="email", example="jean@test.com"),
     *             @OA\Property(property="password", type="string", format="password", example="password"),
     *             @OA\Property(property="password_confirmation", type="string", format="password", example="password")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Utilisateur créé avec succès"),
     *     @OA\Response(response=422, description="Erreur de validation")
     * )
     */
    public function register(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'age' => 'nullable|integer|min:1',
            'poids' => 'nullable|numeric',
            'taille' => 'nullable|numeric',
            'niveau' => 'nullable|in:Débutant,Confirmé,Expert',
            'sport_id' => 'nullable|exists:sports,id',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'fullname' => $request->fullname,
            'age' => $request->age,
            'poids' => $request->poids,
            'taille' => $request->taille,
            'niveau' => $request->niveau,
            'sport_id' => $request->sport_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Utilisateur créé avec succès',
            'access_token' => $token,
            'token_type' => 'Bearer'
        ], 201);
    }

    /**
     * @OA\Post(
     *     path="/login",
     *     tags={"Auth"},
     *     summary="Connexion utilisateur",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"email","password"},
     *             @OA\Property(property="email", type="string", format="email", example="jean@test.com"),
     *             @OA\Property(property="password", type="string", format="password", example="password")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Connexion réussie"),
     *     @OA\Response(response=401, description="Identifiants invalides")
     * )
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Identifiants invalides'], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Connexion réussie',
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    /**
     * @OA\Post(
     *     path="/logout",
     *     tags={"Auth"},
     *     summary="Déconnexion utilisateur",
     *     security={{"sanctum": {}}},
     *     @OA\Response(response=200, description="Déconnexion réussie")
     * )
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Déconnecté avec succès'
        ]);
    }


    /**
     * @OA\Post(
     *     path="/logout",
     *     tags={"Auth"},
     *     summary="Déconnexion utilisateur",
     *     security={{"sanctum": {}}},
     *     @OA\Response(response=200, description="Déconnexion réussie")
     * )
     */
    public function profit(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Déconnecté avec succès'
        ]);
    }
}
