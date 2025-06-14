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
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/work', function () {
    return view('frontend.work');
})->name('work');

Route::get('/films', function () {
    return view('frontend.films');
})->name('films');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::post('contact', 'App\Http\Controllers\frontend\ContactUsController@submit')->name('frontend.contact.submit');
Route::post('get-in-touch', 'App\Http\Controllers\frontend\GetInTouchController@submit')->name('frontend.get_in_touch.submit');
