<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('posts', PostController::class)->except(['create', 'edit', 'update', 'destroy']);
Route::get('/show-post', [App\Http\Controllers\PostController::class, 'index']);
Route::post('/create-post', [App\Http\Controllers\PostController::class, 'store']);
