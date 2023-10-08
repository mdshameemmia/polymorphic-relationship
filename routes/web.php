<?php

use App\Http\Controllers\PostController;
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

Route::get('/create-post',[PostController::class,'createPost']);
Route::get('/post',[PostController::class,'post']);

Route::get('/create-user',[PostController::class,'createUser']);
Route::get('/user',[PostController::class,'user']);
