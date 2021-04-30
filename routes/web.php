<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\GuildController;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', [UserController::class, 'login']);
Route::get('/dashboard', [UserController::class, 'dashboard']);


Route::post('/create', [UserController::class, 'create'])->name('create');
Route::post('/logar', [UserController::class, 'logar'])->name('logar');

Route::get('/register', [UserController::class, 'register']);

Route::get('/landing', [LandingController::class, 'index'])->middleware('auth');
Route::get('/guilds', [GuildController::class, 'index']);



#Route::get('/dashboard', 'UserController@dashboard');