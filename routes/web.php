<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\GuildController;
use App\Models\Guild;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    $guild = new Guild();

    $guild->name = 'BP';
    $guild->save();
});

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/forgot', [UserController::class, 'forgot'])->name('forgot');
Route::get('/dashboard', [UserController::class, 'dashboard']);

Route::post('/create', [UserController::class, 'create'])->name('create');
Route::post('/logar', [UserController::class, 'logar'])->name('logar');

Route::get('/register', [UserController::class, 'register']);

Route::get('/landing', [LandingController::class, 'index']);

Route::get('/guilds', [GuildController::class, 'index'])->name('guilds.listar');
Route::post('/guild', [GuildController::class, 'create'])->name('guild');
Route::get('/guild/excluir/{id}', [GuildController::class, 'delete'])->name('guilds.delete');
Route::post('/guild/editar/{id}', [GuildController::class, 'editar'])->name('guilds.editar');

#Route::get('/dashboard', 'UserController@dashboard');