<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/login', [LoginController::class, 'login'])
    ->name('login')
    ->middleware('guest');

Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/ad/view/{id}', [AdController::class, 'view'])
    ->name('adView');

Route::get('/ad/delete/{id}', [AdController::class, 'delete'])
    ->name('adDelete');

Route::get('/ad/create', [AdController::class, 'createForm'])
    ->name('adCreateForm');

Route::post('/ad/create', [AdController::class, 'create'])
    ->name('adCreate');

Route::get('/ad/update', [AdController::class, 'updateForm'])
    ->name('adUpdate');

Route::post('/ad/update', [AdController::class, 'update'])
    ->name('adUpdate');


