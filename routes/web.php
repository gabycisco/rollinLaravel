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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/faq', function () {
    return view('faq');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/store','storeController@listado');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/detail/{id}',"storeController@detalle");

//Admin
Route::get('/admin','storeController@listadoAdmin');
Route::get('/edit/{id}',"storeController@detalleAdmin");
