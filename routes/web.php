<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\SitemapController;
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

Route::get('/', [frontendController::class, 'home'])->name('home');
Route::get('/about', [frontendController::class, 'about'])->name('about');
Route::get('/contact', [frontendController::class, 'contact'])->name('contact');
Route::get('/sitemap.xml', [SitemapController::class, 'index']);

// Certifiate 
Route::get('/certifiates', [frontendController::class, 'certifiateGrid'])->name('certifiate-grid');
Route::get('/certifiate/{slug}', [frontendController::class, 'certifiateDetail'])->name('certifiate-detail');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
