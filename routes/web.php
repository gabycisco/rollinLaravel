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

//modificaciones de Marina. Pongo para encontrarlo facil jajajja
Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/mochila', function () {
    return view('cart');
});
//fin de Marina SHIT

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/product','ProductController@listado');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/detail/{id}',"ProductController@detalle");



//Admin
Route::get('/adminProducts','ProductController@indexAdmin');
Route::get('/adminProduct/{id}',"ProductController@showAdmin");
Route::get('/brands','BrandController@index');
Route::post('/deleteProduct','ProductController@destroy');

