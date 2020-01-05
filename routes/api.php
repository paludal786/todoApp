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
Route::get('todo/add-form', 'WebController\ActivityController@AddTodoForm');

Route::post('todo/add', 'WebController\ActivityController@AddTodo');

Route::get('todo/{id}/edit', 'WebController\ActivityController@listPerticular');

Route::post('todo/{id}/edit', 'WebController\ActivityController@EditTodo');

Route::get('todo/{id}/done', 'WebController\ActivityController@done');
