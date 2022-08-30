<?php

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

Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/barang', 'BarangController@index')->name('daftarBarang');
    Route::get('/barang/create', 'BarangController@create')->name('createBarang');
    Route::post('/barang/create', 'BarangController@store')->name('storeBarang');
    route::get('/barang/{barang}/edit', 'BarangController@edit')->name('editBarang');
    route::post('/barang/{barang}/edit', 'BarangController@update')->name('updateBarang');
    route::get('/barang/{barang}/delete', 'BarangController@destroy')->name('deleteBarang');
});
