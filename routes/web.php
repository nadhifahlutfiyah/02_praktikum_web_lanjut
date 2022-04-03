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

Route::get('/home', function () {
    return view('home');
});

// Route::get('/', function () {
//    return 'Selamat Datang';
//});

// Route::get('/about', function () {
//    return '2041720082, Nadhifah Lutfiyah Mahmudah, TI-2B';
//});

//Route::get('/articles/{id}', function ($id) {
//    return 'Halaman Artikel dengan ID '. $id;
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
