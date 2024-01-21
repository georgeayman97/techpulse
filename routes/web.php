<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('about-us', fn() => view('pages.about'))->name('about-us');
Route::get('contact-us', fn() => view('pages.contact'))->name('contact-us.create');
Route::get('inner', fn() => view('pages.inner'))->name('inner');
Route::get('service', fn() => view('pages.service'))->name('service');
Route::get('projects', fn() => view('pages.project'))->name('projects');
