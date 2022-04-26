<?php

use App\Http\Controllers\AbonnementController;
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
    return view('pages.home');
})->name('home');
Route::get('/abonnement', [AbonnementController::class,'index'])->name('abonnement');
Route::get('/detailAbonnement', [AbonnementController::class,'detail'])->name('detailAbonnement');
Route::get('about', function () {
    return view('pages.about');
})->name('about');
Route::get('services', function () {
    return view('pages.services');
})->name('services');
Route::get('/docteur', [AbonnementController::class,'docteur'])->name('docteur');
Route::get('/detailDocteur', [AbonnementController::class,'detailDocteur'])->name('detailDocteur');


Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
