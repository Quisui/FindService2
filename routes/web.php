.<?php

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

Route::get('/','PagesController@inicio')->name('home');

Route::get('login','PagesController@login')->name('login');

Route::get('signup','PagesController@singup')->name('signup');
Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');


Route::get('comida','PagesController@cat_comida')->name('cat_comida');

//Route::get('salud','PagesController@cat_salud')->name('cat_salud');

Route::get('salud', function() {
    return view('CategoriaSalud');
})->name('cat_salud');

Route::get('servicio', function() {
    return view('Servicio');
})->name('service');

Route::resource('prueba','PagesController');
