<?php
 
/* cria rotas para o site */
Route::get('/', function () {
    return view('welcome');
});
Route::get('/contato', function () {
    return view('contato'); //nome da view
});

Route::get('/pedido', function () {
    return view('pedido'); //nome da view
});

Route::get('/cliente', function () {
    return view('cliente'); //nome da view
});

Route::get('/produto', function () {
    return view('produto'); //nome da view
});

Route::get('/categoria', function () {
    return view('categoria'); //nome da view
});

Route::get('/contato','ContatoController@index');
Route::get('/categoria','CategoriaController@index');
Route::get('/pedido','PedidoController@index');
Route::get('/produto','ProdutoController@index');
Route::get('/cliente','ClienteController@index');

Route::post('/contato/inserir','ContatoController@store');
Route::post('/categoria/inserir','CategoriaController@store');
Route::post('/pedido/inserir','PedidoController@store');
Route::post('/produto/inserir','ProdutoController@store');
Route::post('/cliente/inserir','ClienteController@store');

Route::get('/contato/{id}','ContatoController@destroy');
Route::get('/categoria/{id}','CategoriaController@destroy');
Route::get('/cliente/{id}','ClienteController@destroy');
Route::get('/pedido/{id}','PedidoController@destroy');
Route::get('/produto/{id}','ProdutoController@destroy');


Route::get('/categoria-editar/{id}/editar','CategoriaController@edit');
Route::get('/cliente-editar/{id}/editar','ClienteController@edit');
Route::get('/contato-editar/{id}/editar','ContatoController@edit');
Route::get('/pedido-editar/{id}/editar','PedidoController@edit');
Route::get('/produto-editar/{id}/editar','ProdutoController@edit');


Route::post('/categoria-alterar/{id}','CategoriaController@update');
Route::post('/cliente-alterar/{id}','ClienteController@update');
Route::post('/contato-alterar/{id}','ContatoController@update');
Route::post('/pedido-alterar/{id}','PedidoController@update');
Route::post('/produto-alterar/{id}','ProdutoController@update');
