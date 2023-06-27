<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Models\Genre;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::group(['middlware' => 'auth'], function() {
    Route::resource('/movies', MovieController::class);
});

Route::resource('/genres', GenreController::class);
Route::get('/', [HomeController::class, 'index']);

Route::resource('/reviews', ReviewController::class);
Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [AuthController::class, 'showRegistrationFrom']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginFrom'])->name('login');
Route::post('/login', [AuthController::class, 'login']);