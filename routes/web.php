<?php

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
    return view('index');
})->name('home');
// Route::get('/','HomeController@index')->name('home');
// Route::get('/getcode','HomeController@getCode');

Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});
Route::get('/profile', function () {
    return view('frontend.profile');
});
Route::get('/home', function () {
    return view('frontend.home');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
