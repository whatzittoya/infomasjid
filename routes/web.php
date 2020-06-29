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
    return view('welcome');
});

Auth::routes();



Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');
Route::middleware('auth', 'role:admin')->prefix('admin')->group(function () {
    Route::resource('masjid', 'MasjidController');
    Route::resource('takmir', 'TakmirController');
    Route::post('takmir/reset/{id}', 'TakmirController@resetPassword')->name('takmir.reset');
    Route::resource('berita/all', 'BeritaController', ['names' => 'beritaall']);
    Route::resource('kategori', 'KategoriController');
    //Route::resource('users', 'UserController');
});

Route::middleware('auth', 'role:takmir')->prefix('takmir')->group(function () {

    Route::get('masjid', 'MasjidController@detail')->name('takmir_masjid');
    Route::get('masjid/edit', 'MasjidController@takmirEdit')->name('takmir_edit_masjid');
    Route::patch('masjid/update', 'MasjidController@takmirUpdate')->name('takmir_update_masjid');
    Route::resource('berita', 'BeritaController');
    //Route::resource('users', 'UserController');
});
