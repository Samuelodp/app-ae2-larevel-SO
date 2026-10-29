<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\LibroController_SO;
 
Route::get('/libros', [LibroController_SO::class, 'index']);
