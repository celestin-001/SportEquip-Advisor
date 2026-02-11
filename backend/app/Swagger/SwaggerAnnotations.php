<?php

namespace App\Swagger;

use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="SportEquip API",
 *     version="1.0.0",
 *     description="Documentation des endpoints de SportEquip"
 * )
 *
 * @OA\Server(
 *     url="http://localhost:8080/api",
 *     description="Serveur local"
 * )
 */
class SwaggerAnnotations
{
    // Ce fichier ne contient rien d'autre, juste les annotations pour Swagger
}
