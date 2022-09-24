<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;

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

Route::get('/', [HomeController::class, 'main']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/why', [HomeController::class, 'why']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/policy', [HomeController::class, 'policy']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [HomeController::class, 'admin']);
    });
});
Route::post('/add-offer', [OfferController::class, 'store']);
Route::post('/check_offer', [OfferController::class, 'index']);

require __DIR__.'/auth.php';

