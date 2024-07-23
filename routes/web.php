<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('follower', [HomeController::class, 'storeFollower'])->name('follower.store');
    Route::get('about-us', fn() => view('pages.about'))->name('about-us');
    Route::get('contact-us', [ContactController::class, 'create'])->name('contact-us.create');
    Route::post('contact-us', [ContactController::class, 'store'])->name('contact-us.store');
    Route::get('inner', fn() => view('pages.inner'))->name('inner');
    Route::get('service', fn() => view('pages.service'))->name('service');
    Route::get('projects', [ProjectController::class, 'index'])->name('projects');
    Route::get('projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');
});
Route::get('optimize', function () {
    Artisan::call('optimize:clear');
    dd("Optimize clear command executed");
});
