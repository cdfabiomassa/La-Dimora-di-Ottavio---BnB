<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/booknow', [PublicController::class, 'booknow'])->name('booknow');
Route::get('/rooms', [PublicController::class, 'rooms'])->name('rooms');

Route::get('/contactUs', [ContactController::class, 'contactUs'])->name('contactUs');
Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
