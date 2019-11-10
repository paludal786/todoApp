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


Route::get('/todo', 'WebController\ActivityController@index');
Route::get('/todo/add-form', 'WebController\ActivityController@AddTodoForm');
Route::post('/todo/add', 'WebController\ActivityController@AddTodo');

Route::get('/todo/{id}/edit', 'WebController\ActivityController@show');

Route::post('/todo/{id}/edit', 'WebController\ActivityController@EditTodo');
