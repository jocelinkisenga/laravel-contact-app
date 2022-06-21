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

Route::get('/',[App\Http\Controllers\ContactController::class, 'index']);
Route::get('contact',[App\Http\Controllers\ContactController::class, 'create'])->name('create-contact');
Route::get('/contact/{id}',[App\Http\Controllers\ContactController::class, 'show'])->name('contact-detail');
Route::post('contact',[App\Http\Controllers\ContactController::class, 'store'])->name('store-contact');

Route::get('/companies',[App\Http\Controllers\CompanyController::class, 'index']);
Route::get('/company',[App\Http\Controllers\CompanyController::class, 'create'])->name('create-company');
Route::get('/{slug}/{id}',[App\Http\Controllers\CompanyController::class, 'show'])->name('company-detail');
Route::post('company',[App\Http\Controllers\CompanyController::class, 'store'])->name('store-company');

Route::get('/profile',[App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::post('/profile',[App\Http\Controllers\ProfileController::class, 'update'])->name('profile');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
