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

Route::get('cursos/editar/{curso}', 'CursoController@edit');
Route::get('cursos/lista', 'CursoController@list');
Route::get('cursos/crear', 'CursoController@create');
Route::get('cursos', 'CursoController@index');
Route::get('cursos/{curso}', 'CursoController@show');
Route::post('cursos', 'CursoController@store');
Route::patch('cursos/{curso}', 'CursoController@update');
Route::delete('cursos/{curso}', 'CursoController@destroy');


Route::get('niveles/editar/{nivel}', 'NivelController@edit');
Route::get('niveles/lista', 'NivelController@list');
Route::get('niveles/crear', 'NivelController@create');
Route::get('niveles', 'NivelController@index');
Route::get('niveles/{nivel}', 'NivelController@show');
Route::post('niveles', 'NivelController@store');
Route::patch('niveles/{nivel}', 'NivelController@update');
Route::delete('niveles/{nivel}', 'NivelController@destroy');
