<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/suppliers', function (Request $request) {
    return $request->user();
});