<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', 'API\LoginController@login');
Route::get('berita/search', 'API\BeritaController@searchable');
    Route::apiResource('berita', 'API\BeritaController');

    Route::get('masjid/search', 'API\MasjidController@searchable');

    Route::post('masjid/follow', 'API\MasjidController@follow');
    Route::post('masjid/follow/select', 'API\MasjidController@select');
    Route::post('masjid/unfollow', 'API\MasjidController@unfollow');
    Route::apiResource('masjid', 'API\MasjidController');
    Route::get('about', 'API\AboutController@index');

Route::middleware('auth:api')->prefix("v2")->group(function () {
    Route::get('berita/search', 'API\BeritaController@searchable');
    Route::apiResource('berita', 'API\BeritaController');

    Route::get('masjid/search', 'API\MasjidController@searchable');

    Route::post('masjid/follow', 'API\MasjidController@follow');
    Route::post('masjid/follow/select', 'API\MasjidController@select');
    Route::post('masjid/unfollow', 'API\MasjidController@unfollow');
    Route::apiResource('masjid', 'API\MasjidController');
    Route::get('about', 'API\AboutController@index');
});
