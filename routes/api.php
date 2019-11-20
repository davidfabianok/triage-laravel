<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//  /api/niveles_de_urgencia

Route::get('/niveles_de_urgencia', 'NivelDeUrgenciaController@listar');

Route::get('/niveles_de_urgencia/{id}', 'NivelDeUrgenciaController@obtenerUno');

Route::post('/niveles_de_urgencia', 'NivelDeUrgenciaController@save');

Route::put('/niveles_de_urgencia/{id}', 'NivelDeUrgenciaController@update');

Route::delete('/niveles_de_urgencia/{id}', 'NivelDeUrgenciaController@deleted');

//  /api/personas

Route::get('/personas', 'PersonaController@listar');

Route::get('/personas/{id}', 'PersonaController@obtenerUno');

Route::post('/personas', 'PersonaController@save');

Route::put('/personas/{id}', 'PersonaController@update');

Route::delete('/personas/{id}', 'PersonaController@deleted');
