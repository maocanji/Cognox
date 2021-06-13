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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cuentas_propia', 'HomeController@cuentas_propia')->name('cuentas_propia');
Route::get('/cuentas_terceros', 'HomeController@cuentas_terceros')->name('cuentas_terceros');
Route::get('/cuentas_asociadas', 'HomeController@cuentas_asociadas')->name('cuentas_asociadas');
Route::post('/registro_clientes', 'HomeController@registro_clientes')->name('registro_clientes');
Route::post('/registro_tranferencia', 'HomeController@registro_tranferencia')->name('registro_tranferencia');

