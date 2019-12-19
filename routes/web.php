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

//RUTA LOGOUT
Route::get('/logout','\App\Http\Controllers\Auth\LoginController@logout');

//RUTAS PERFIL
Route::get('/perfil/{id}', 'UserController@verUsuario')->middleware('auth');
Route::get('/editarPerfil/{id}', 'UserController@tomarDatos')->middleware('auth');
Route::post('/editarPerfil/{id}', 'UserController@modificarDatos')->middleware('auth');

// ELIMINAR
//Route::post('/editarPerfil/{id}','UserController@perfilDestroy');
Route::post('/perfil/destroy','UserController@perfilDestroy')->middleware('auth');


//RUTAS MOCHILA
Route::get('/mochila', function () {
    return view('cart');
})->middleware('auth');

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
    Route::get('/store','ProductController@listado')->middleware('auth');
    Route::get('/store/detail/{id}',"ProductController@detalle")->middleware('auth');

    //RUTA GRACIAS POR COMPRA
    Route::get('/graciasCompra', function(){
        return view ('store/graciasCompra');
    })->middleware('auth');


//CARRITO DE COMPRAS
    Route::get('/mochila','CartProductController@show')->middleware('auth');
    Route::get('/cart/show/', 'CartController@show' );

    //AGREGAR AL CARRITO
      Route::get('/mochila/add','CartProductController@add')->middleware('auth');
    // Route::post('/mochila/add','CartProductController@add')->middleware('auth');

    //CHECKOUT
    Route::get('/checkout','CartProductController@checkout')->middleware('auth');

    //VER COMPRAS
    Route::get('/verCompras','CartProductController@listado')->middleware('auth');


//RUTAS ADMIN
    // LISTAR Y DETALLE DE ARTÍCULOS
    Route::get('/admin','ProductController@adminIndex')->middleware('admin');
    Route::get('/admin/detail/{id}',"ProductController@adminDetail")->middleware('admin');

    // CREAR
    Route::get('/admin/create', function () {
        return view('adminProducts/create');
    })->middleware('admin');
    Route::post('/admin/create','ProductController@create')->middleware('admin');

    // EDITAR
    Route::get('/admin/edit/{id}',"ProductController@adminEdit")->middleware('admin');
    Route::post('/admin/edit/{id}','ProductController@update')->middleware('admin');

    // ELIMINAR
    Route::post('/admin/destroy','ProductController@adminDestroy')->middleware('admin');

    //VER LISTAS DE CONTACTO Y NEWSLETTER PARA ADMIN
    Route::get('/verListaNL','SubscriberController@listado')->middleware('admin');
    Route::get('/verListaContactos','ContactController@listado')->middleware('admin');
