<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PostRequest;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \App\Http\Requests\Api\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(PostRequest $request)
    {
        //
    }
}
