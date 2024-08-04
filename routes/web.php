<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendWork;


Route::get('/',[BackendWork::class,'index']);

Route::get('/project/{id}',[BackendWork::class,'projectDetails']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/register', function () {
        if (Auth::check()) {
            return redirect('/'); // Redirect to the homepage or another page.
        }});
    Route::get('/createForm',[BackendWork::class,'create']);
Route::post('/add_poject', [BackendWork::class , 'addProject']);
Route::get('/read', [BackendWork::class , 'read']);
Route::get('/delete/{id}', [BackendWork::class , 'delete']);
Route::get('/update/{id}', [BackendWork::class , 'update']);
Route::post('/confirmUpdate/{id}', [BackendWork::class , 'comfirmUpdate']);
Route::get('/imagesGallary/{id}', [BackendWork::class , 'imageGallary']);
Route::post('/addImage/{id}', [BackendWork::class , 'addimage']);
Route::get('deleteImage/{id}' , [BackendWork::class , 'deleteImage']);
});
