<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return response()->json([
        'name' => config('app.name'),
        'framework' => 'Laravel',
        'version' => app()->version(),
        'status' => 'running',
    ]);
});
