<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendWork;

Route::get('/', function () {
    return view('index');
});

Route::get('/project/{id}',[BackendWork::class,'index']);
Route::get('/creteForm',[BackendWork::class,'create']);
Route::post('/add_poject', [BackendWork::class , 'addProject']);
Route::get('/read', [BackendWork::class , 'read']);
Route::get('/delete/{id}', [BackendWork::class , 'delete']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
