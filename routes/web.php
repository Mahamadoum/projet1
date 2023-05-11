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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//route pour afficher la vue create avec le controller create
Route::get('/create', [App\Http\Controllers\ProduitController::class, 'create'])->name('creatept');
//route pour enreigistrer un produit
Route::post('/store', [App\Http\Controllers\ProduitController::class, 'store'])->name('storept');
Route::post('/index', [App\Http\Controllers\ProduitController::class, 'index'])->name('indexpt');