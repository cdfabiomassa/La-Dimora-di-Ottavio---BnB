<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriberController;

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

// Homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Generiche
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/rooms', [PublicController::class, 'rooms'])->name('rooms');

Route::get('/booking', [PublicController::class, 'booking'])->name('booking');
Route::get('/createbooking', [PublicController::class, 'createbooking'])->name('createbooking');

// Mandare un messaggio
Route::get('/contactUs', [ContactController::class, 'contactUs'])->name('contactUs');
Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');

// Lingua
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('/subscribe', [SubscriberController::class, 'subscribe']);

// Camere
Route::get('/camera1', [RoomsController::class, 'camera1'])->name('camera1');
