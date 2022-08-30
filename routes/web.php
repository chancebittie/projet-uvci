<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// use App\Http\Controllers\FrontController;

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
    return view('home');
})->name('acceuil');

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/actualite', [DestController::class, 'actualite'])->name('actualite');
Route::get('/apropos', [DestController::class, 'apropos'])->name('apropos');
Route::get('/espace_annonce', [DestController::class, 'espace_annonce'])->name('espace_annonce');
Route::get('/espace_sante', [DestController::class, 'espace_sante'])->name('espace_sante');
Route::get('/action', [DestController::class, 'action'])->name('action');

// Route::group()
Route::group([
    'prefix' => '/admin',
    'as' => 'admin.',
  ], function () {
      Route::get('/', [AdminController::class, 'index'])->name('index');
  });



