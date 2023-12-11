<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [BookController::class, 'index']);
Route::get('/pagination/{id}', [BookController::class, 'index']);


Route::get('/vote', function () {
    return view('votes');
});
Route::get('/famous', function () {
    return view('famousAuthor');
});
