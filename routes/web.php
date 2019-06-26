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


    //   P R E G U N T A S
    Route::get('preguntas/editar/{pregunta}', 'PreguntaController@edit');
    Route::get('preguntas/lista', 'PreguntaController@list');
    Route::get('preguntas/crear', 'PreguntaController@create');

    Route::get('preguntas', 'PreguntaController@index');
    Route::get('preguntas/{pregunta}', 'PreguntaController@show');
    Route::post('preguntas', 'PreguntaController@store');
    Route::patch('preguntas/{pregunta}', 'PreguntaController@update');
    Route::delete('preguntas/{pregunta}', 'PreguntaController@destroy');


    // R E S P U E S T A S
    Route::get('respuestas/editar/{respuesta}', 'RespuestaController@edit');
    Route::get('respuestas/lista', 'RespuestaController@list');
    Route::get('respuestas/crear', 'RespuestaController@create');

    Route::get('respuestas', 'RespuestaController@index');
    Route::get('respuestas/{respuesta}', 'RespuestaController@show');
    Route::post('respuestas', 'RespuestaController@store');
    Route::patch('respuestas/{respuesta}', 'RespuestaController@update');
    Route::delete('respuestas/{respuesta}', 'RespuestaController@destroy');

    //T I P O   P R E G U N T A S
    Route::get('tipopreguntas/editar/{tipoPregunta}', 'TipoPreguntaController@edit');
    Route::get('tipopreguntas/lista', 'TipoPreguntaController@list');
    Route::get('tipopreguntas/crear', 'TipoPreguntaController@create');

    Route::get('tipopreguntas', 'TipoPreguntaController@index');
    Route::get('tipopreguntas/{tipoPregunta}', 'TipoPreguntaController@show');
    Route::post('tipopreguntas', 'TipoPreguntaController@store');
    Route::patch('tipopreguntas/{tipoPregunta}', 'TipoPreguntaController@update');
    Route::delete('tipopreguntas/{tipoPregunta}', 'TipoPreguntaController@destroy');
