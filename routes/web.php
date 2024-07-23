<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Project;

Route::get('/', function () {
    return view('index');
});

Route::get('/project/{id}',[Project::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
