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


ROUTE::get('/','PagesController@home');
ROUTE::get('/contact','PagesController@contact');
Route::post('/projects/{project}/tasks','ProjectTasksController@store');
Route::patch('/tasks/{task}','ProjectTasksController@update');
ROUTE::resource('/projects','ProjectsController');

/*
ROUTE::get('/projects','ProjectsController@index');
ROUTE::post('/projects','ProjectsController@store');

*/

Route::get('testing', function () {
    $tasks=[
        'Go to the store',
        'Go to the market',
        'Go to the view'
    ];

    return view('testing', [
        'tasks'=>$tasks,
        'title'=>request('title')
    ]);
});
