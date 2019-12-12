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
Route::get('/editarPerfil/{id}', 'UserController@tomarDatos');
Route::post('/editarPerfil/{id}', 'UserController@modificarDatos');
Route::post('/editarPerfil/{id}','UserController@perfilDestroy');

//RUTAS MOCHILA
Route::get('/mochila', function () {
    return view('cart');
});

//RUTAS CONTACT
Route::get('/formularioEnviado', 'ContactController@create');
Route::post('/formularioEnviado', 'ContactController@create');

//RUTA GRACIAS CONTACTO
Route::get('/graciasContacto', function(){
    return view ('graciasContacto');
});



//RUTAS NEWSLETTER
Route::get('/NLEnviado', 'SubscriberController@create');
Route::post('/NLEnviado', 'SubscriberController@create');

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/login', function () {
    return view('login');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//RUTAS STORE
    // LISTAR Y DETALLE DE ARTÍCULOS
    Route::get('/store','ProductController@listado');
    Route::get('/store/detail/{id}',"ProductController@detalle");

    //RUTA GRACIAS POR COMPRA
    Route::get('/graciasCompra', function(){
        return view ('store/graciasCompra');
    });

//RUTAS ADMIN
    // LISTAR Y DETALLE DE ARTÍCULOS
    Route::get('/admin','ProductController@adminIndex');
    Route::get('/admin/detail/{id}',"ProductController@adminDetail");

    // CREAR
    Route::get('/admin/create', function () {
        return view('adminProducts/create');
    });
    Route::post('/admin/create','ProductController@create');

    // EDITAR
    Route::get('/admin/edit/{id}',"ProductController@adminEdit");
    Route::post('/admin/edit/{id}','ProductController@update');

    // ELIMINAR
    Route::post('/admin/destroy','ProductController@adminDestroy');


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

    //Carrito de compras.
    Route::get('/cart','CartController@index');
    Route::get('/cart/show/', 'CartController@show' );
