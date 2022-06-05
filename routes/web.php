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

Route::get('/', [App\Http\Controllers\ContactController::class, 'index'])->name('index');
Route::get('/contact',[App\Http\Controllers\ContactController::class, 'create'])->name('create-contact');
Route::get('/{slug}/{id}',[App\Http\Controllers\ContactController::class, 'show'])->name('contact_detail');

Route::post('/contact',[App\Http\Controllers\ContactController::class, 'store'])->name('store_contact');
