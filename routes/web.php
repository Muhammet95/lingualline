<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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
require __DIR__.'/auth.php';
Route::get('/set_locale/{locale}', function ($locale, Request $request) {
    if (! in_array($locale, ['en', 'ru', 'tk'])) {
        abort(400);
    }

    App::setLocale($locale);
});
Route::get('/about', [HomeController::class, 'about']);
Route::get('/why', [HomeController::class, 'why']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/policy', [HomeController::class, 'policy']);
Route::post('/send', [HomeController::class, 'send']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [HomeController::class, 'admin']);
    });
});
Route::post('/add-offer', [OfferController::class, 'store']);
Route::post('/check_offer', [OfferController::class, 'index']);
Route::post('/modify_offer', [OfferController::class, 'modify']);

Route::get('/{type?}', [HomeController::class, 'main']);


