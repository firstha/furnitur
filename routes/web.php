<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('frontend.homepage');

Route::get('/', [FrontendController::class, 'homepage']);
Route::get('/product', [FrontendController::class, 'product']);
Route::get('/blog', [FrontendController::class, 'blog']);
Route::get('/contact', [FrontendController::class, 'contact']);

// });
