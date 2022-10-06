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

// Route::get('/', function () {
//     return view('home');
// })->name('actualite');

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/actualite', [DestController::class, 'actualite'])->name('actualite');
Route::get('/apropos_de', [DestController::class, 'apropos_de'])->name('apropos_de');
Route::get('view_actualite/{id}', [DestController::class, 'view_actualites'])->name('view_actualite');
Route::get('view_actualite1', [DestController::class, 'view_actualite1'])->name('view_actualite1');
Route::get('view_actualite2', [DestController::class, 'view_actualite2'])->name('view_actualite2');
Route::get('view_actualite3', [DestController::class, 'view_actualite3'])->name('view_actualite3');
Route::get('/sante', [DestController::class, 'sante'])->name('sante');
Route::get('/empl_stages', [DestController::class, 'empl_stages'])->name('empl_stage');
Route::get('/creer_empl_stage', [DestController::class, 'creer_empl_stages'])->name('creer_empl_stage');
Route::get('/actions', [DestController::class, 'actions'])->name('actions');
Route::get('/', [DestController::class, 'actualites'])->name('actualite');

// Route::group()
Route::group([
    'middleware' => 'auth',
    'prefix' => '/admin',
    'as' => 'admin.',
  ], function () {
      Route::get('/utilisateurs', [AdminController::class, 'index'])->name('admin');
      Route::get('/utilisateurs', [AdminController::class, 'utilisateurs'])->name('utilisateurs');
      Route::get('/actualites', [AdminController::class, 'actualites'])->name('actualites');
      Route::get('/pharmacies', [AdminController::class, 'pharmacies'])->name('pharmacies');
      Route::get('/articles', [AdminController::class, 'articles'])->name('articles');
      Route::get('/actions', [AdminController::class, 'actions'])->name('actions');
      Route::get('/hopitals', [AdminController::class, 'hopitals'])->name('hopitals');
      Route::get('/deces', [AdminController::class, 'deces'])->name('deces');
      Route::get('/mariages', [AdminController::class, 'mariages'])->name('mariages');
      Route::get('/naissances', [AdminController::class, 'naissances'])->name('naissances');
      Route::get('/nous_contacter', [AdminController::class, 'nous_contacter'])->name('nous_contacter');
  });



