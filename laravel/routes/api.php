<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/contato','ContatoController@contatos');

Route::post('/contato','ContatoController@contatoSalvar');

Route::get('/contato/{id}','ContatoController@contatoById');

//Route::delete('/contato/{id}','ContatoController@deleteContatoById');
