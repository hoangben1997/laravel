<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


Route::get('/signin', [UserController::class, 'signin']);
Route::post('/signin', [UserController::class, 'signin_post']);


Route::get('/signup', [UserController::class, 'signup']);
Route::post('/signup', [UserController::class, 'signup_post']);

Route::get('/dashboard', [UserController::class, 'dashboard']);
