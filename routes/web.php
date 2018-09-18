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

Route::get('/new', [

    'uses' => 'PagesController@new'

]);

Route::get('/todos', [

    'uses' => 'TodosController@index', 
    'as'   => 'todos'

]);

Route::get('/todo/delete/{id}', [

    'uses' => 'TodosController@delete',
    'as'   => 'todo.delete'             // it is the name of our route

]);

Route::get('/todo/update/{id}', [

    'uses' => 'TodosController@update',
    'as'   => 'todo.update'             // it is the name of our route

]);

Route::post('/todo/save/{id}', [

    'uses' => 'TodosController@save',
    'as'   => 'todos.save'             // it is the name of our route

]);

Route::post('/create/todo', [

    'uses' => 'TodosController@store'

]);

Route::get('/todo/completed/{id}', [

    'uses' => 'TodosController@completed',
    'as'   => 'todos.completed'             // it is the name of our route

]);

