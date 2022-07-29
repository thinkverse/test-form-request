<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PostRequest;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \App\Http\Requests\Api\PostRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(PostRequest $request): JsonResponse
    {
        $validated = $request->safe();

        return response()
            ->json($validated);
    }
}
