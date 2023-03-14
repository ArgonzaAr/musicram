<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [RegisterController::class, 'principal']);

//LLama al controlador para mapear el método con la ruta 
Route::get('/register', [RegisterController::class, 'index']) -> name('register'); 
Route::post('/register', [RegisterController::class, 'store']); 

Route::get('/muro', [PostController::class, 'index']) -> name('post.index');