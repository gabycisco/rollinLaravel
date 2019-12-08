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


Route::get('/faq', function () {
    return view('faq');
});

Route::get('/login', function () {
    return view('login');
});

//RUTAS PERFIL
Route::get('/perfil/{id}', 'UserController@verUsuario');
Route::get('/editarPerfil/{id}', 'UserController@modificarDatos');
Route::post('/editarPerfil/{id}', 'UserController@modificarDatos');

//RUTAS MOCHILA
Route::get('/mochila', function () {
    return view('cart');
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


Route::get('/product','ProductController@listado');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/detail/{id}',"ProductController@detalle");



//Admin
Route::get('/admin','ProductController@adminIndex');
Route::get('/admin/create', function () {
    return view('adminProducts/create');
});
Route::post('/admin/create','ProductController@create');


Route::get('/admin/edit/{id}',"ProductController@adminEdit");
Route::post('/admin/destroy','ProductController@adminDestroy');
Route::get('/brands','BrandController@index');

