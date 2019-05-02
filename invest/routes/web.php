<?php

// login
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
Route::get('/deposito', 'ControladorUsuario@edit');
Route::post('/deposito/{id}', 'ControladorUsuario@store');

//index
Route::get('/index', 'ControladorEmpresa@telaPrincipal')->name('index');

//empresa
Route::get('/empresa', 'ControladorEmpresa@index')->name('index Empresa');
Route::get('/empresa/novo', 'ControladorEmpresa@createEmpresa')->name('create Empresa');
Route::post('/empresa', 'ControladorEmpresa@store')->name('store Empresa');
Route::get('/empresa/{id}', 'ControladorEmpresa@destroy')->name('destroy Empresa');
Route::get('/empresa/editar/{id}', 'ControladorEmpresa@edit')->name('edit Empresa');
Route::post('/empresa/{id}', 'ControladorEmpresa@update')->name('update Empresa');
Route::get('/empresa/consulta/{id}', 'ControladorEmpresa@consulta')->name('consulta Empresa');


// ------- transações ------- //
//Compras
Route::get('/cotacoes', 'ControladorCompra@cotacoes');
Route::post('/cotacoes/{id}', 'ControladorCompra@store');


// --------- Vendas --------- //
//Vendass
Route::get('/carteira', 'ControladorCarteira@carteira');


// --------- tabelas --------- //
//lista de empresas, Investimentos e transações
//Route::get('/transacoes', 'OperacoesBancariasControler@transacoes');
