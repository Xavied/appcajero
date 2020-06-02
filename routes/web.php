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
/*Route::get('/', function()
{

});*/


Route::get('/', function () {
    return view('welcome');
});
//nos vamos a la vista del cajero
Route::get('/cajero', function(){
    return view('cajero');
});


//get
Route::get('/mesaofactura', function(){
    return view('mesaofactura');
});
Route::get('/buscarfactura', 'BuscarFacturaController@index');
Route::get('/buscarmesa', 'BuscarMesaController@index');
Route::get('/crearcliente', 'ClienteController@index');

///post
Route::post('/buscarfactura', 'BuscarFacturaController@find');
Route::post('/welcome', 'autController@ingresar');
Route::post('/buscarmesa', 'BuscarMesaController@find');
Route::post('/crearcliente', 'ClienteController@enviar');

//patch
Route::patch('/buscarmesa', 'BuscarMesaController@actualizarped' );


