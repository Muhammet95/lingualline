<?php

use App\Http\Controllers\HomeController;
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

require __DIR__.'/auth.php';

