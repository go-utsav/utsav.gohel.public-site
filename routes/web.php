<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
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
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::get('/site-map', [frontendController::class, 'siteMap'])->name('site-map');

// Certifiate 
Route::get('/certifiates', [frontendController::class, 'certifiateGrid'])->name('certifiate-grid');
Route::get('/certifiate/{slug}', [frontendController::class, 'certifiateDetail'])->name('certifiate-detail');

// Projects
Route::get('/projects', [frontendController::class, 'projectsGrid'])->name('projects-grid');
Route::get('/project/{slug}', [frontendController::class, 'projectDetail'])->name('project-detail');

// Case Study
Route::get('/case-studies', [frontendController::class, 'caseStudyGrid'])->name('case-study-grid');
Route::get('/case-studies/{slug}', [frontendController::class, 'caseStudyDetail'])->name('case-study-detail');

// Service
Route::get('/services', [frontendController::class, 'serviceGrid'])->name('service-grid');
Route::get('/service/{slug}', [frontendController::class, 'serviceDetail'])->name('service-detail');

// Events
Route::get('/events', [frontendController::class, 'eventGrid'])->name('event-grid');
Route::get('/events/{slug}', [frontendController::class, 'eventDetail'])->name('event-detail');

// Temporary route for testing reCAPTCHA config - REMOVE IN PRODUCTION
Route::get('/test-recaptcha', function() {
    return [
        'site_key_exists' => !empty(config('services.recaptcha.site_key')),
        'secret_key_exists' => !empty(config('services.recaptcha.secret_key')),
        'site_key_length' => strlen(config('services.recaptcha.site_key')),
        'secret_key_length' => strlen(config('services.recaptcha.secret_key'))
    ];
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
