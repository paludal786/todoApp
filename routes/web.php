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

// Route::get('/', function () {
//     return view('activities.index');
// })->middleware('checkRole:qaz');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'WebController\ActivityController@index');

Route::get('todo/add-form', 'WebController\ActivityController@AddTodoForm');


Route::get('todo/{id}/edit', 'WebController\ActivityController@listPerticular');

Route::post('todo/{id}/edit', 'WebController\ActivityController@EditTodo');

Route::get('todo/{id}/done', 'WebController\ActivityController@done');

Route::post('/login', 'WebController\AuthController@login');
Route::post('/register', 'WebController\AuthController@register');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
