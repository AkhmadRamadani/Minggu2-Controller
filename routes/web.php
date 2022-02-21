<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;
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
    return view('home');
});

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [CategoryController::class, 'marbeledu']);
    Route::get('/marbel-and-friends-kids-games', [CategoryController::class, 'marbelfriends']);
    Route::get('/riri-story-books', [CategoryController::class, 'riristory']);
    Route::get('/kolak-kids-songs', [CategoryController::class, 'kolakkids']);
});

Route::get('/news/{param?}', function ($param = null){
    echo 'Judul berita: ' . $param;
});

Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'ki']);
});

Route::get('/about-us', function () {
    return 'ABOUT US';
});

Route::resource('contact-us', ContactController::class);