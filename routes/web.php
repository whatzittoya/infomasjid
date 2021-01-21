<?php

use Illuminate\Http\Request;
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
Route::get('/redirect/{page}/{id}', function (Request $request) {
    return view('redirect')->with(['page'=> $request->page,'id'=>$request->id]);
});


Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');
Route::get('/email', function () {
    return view('emails.user_registered')->with(['user'=> ['ok'=>123]]);
});
Route::middleware('auth', 'role:admin')->prefix('admin')->group(function () {
    Route::resource('masjid', 'MasjidController');


    Route::resource('takmir', 'TakmirController');
    Route::get('masjid/{id}/takmir/create', 'TakmirController@create')->name('takmir.create');
    Route::post('masjid/{mid}/takmir', 'TakmirController@store')->name('takmir.store');
    Route::get('masjid/{mid}/takmir/{tid}/edit', 'TakmirController@edit')->name('takmir.edit');
    Route::patch('masjid/{mid}/takmir/{tid}', 'TakmirController@update')->name('takmir.update');
    Route::post('masjid/{mid}/takmir/{tid}', 'TakmirController@activate')->name('takmir.activate');




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
