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

//Route::get('/', function () {
    //    return view('master');
    //});
    
Route::get('/', 'App\Http\Controllers\BeritaController@index');

Route::get('daftarBerita', 'App\Http\Controllers\BeritaController@daftarBerita')->name('daftarBerita.data');

Route::get('berita/{slug}', 'App\Http\Controllers\BeritaController@isiBerita')->name('berita.isiBerita');

Route::get('login', 'App\Http\Controllers\AdminController@index')->name('login');

Route::post('auth_login', 'App\Http\Controllers\AdminController@login')->name('auth_login');

Route::group(['middleware' => ['auth']],function(){
    Route::get('dashboard_admin', 'App\Http\Controllers\AdminController@dashboard_admin')->name('dashboard_admin');

    Route::get('data', 'App\Http\Controllers\BeritaController@data')->name('berita.data');
    
    Route::post('store_berita', 'App\Http\Controllers\BeritaController@store')->name('berita.store');
    
    Route::get('input', 'App\Http\Controllers\BeritaController@input');

    Route::get('edit/{id}', 'App\Http\Controllers\BeritaController@edit');

    Route::post('update_berita/{berita}', 'App\Http\Controllers\BeritaController@update')->name('berita.update');

    Route::get('register', 'App\Http\Controllers\AdminController@register')->name('register');
    Route::post('auth_register', 'App\Http\Controllers\AdminController@auth_register')->name('auth_register');
    Route::get('delete/{berita}', 'App\Http\Controllers\BeritaController@delete')->name('berita.delete');
    

    Route::get('data_user', 'App\Http\Controllers\AdminController@data_user')->name('data_user');

    Route::get('edit_user/{id}', 'App\Http\Controllers\AdminController@edit_user')->name('edit_user');

    Route::post('update_user/{user}', 'App\Http\Controllers\AdminController@update_user')->name('user.update_user');

    Route::get('hapus_user/{user}', 'App\Http\Controllers\AdminController@hapus_user')->name('user.hapus_user');


    Route::post('logout', 'App\Http\Controllers\AdminController@logout')->name('logout');
});

// Api public
Route::get('getListBerita', 'App\Http\Controllers\BeritaController@getListBerita')->name('getListBerita');
Route::get('getBerita/{slug}', 'App\Http\Controllers\BeritaController@getBerita')->name('getBerita');