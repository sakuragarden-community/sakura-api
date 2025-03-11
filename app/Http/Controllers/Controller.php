<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

abstract class Controller
{
    public function getResponse(
        mixed $data = [],
        int $status = 200,
        array $headers = [],
        int $options = 0
    ): JsonResponse {
        return response()->json($data, $status, $headers, $options);
    }

    public function isDiscord(Request $request): bool
    {
        return (bool)$request->get('is_discord');
    }
}
