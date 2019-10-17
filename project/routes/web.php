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

Route::resource('projects', 'ProjectsController');

Route::patch('/tasks/{task}', 'TaskController@update');
Route::post('/projects/{project}/tasks', 'TaskController@store');


/* 
    PLAN OUT THE APP - 7 different ways to work with PROJECTS

    GET - projects (index)
    GET - projects (create) (create a project)
    GET - projects/id (show) (show a specific project)
    POST - projects (store) (add a new project)
    PUT - projects/id (update) (update or change a project with a specific ID)
    DELETE - projects/id (delete) (delete a project with a specific ID)

*/

// //GET 
// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}', '@ProjectsController@show');
// // this one below is calls up a specific project to view (and then be edited)
// Route::get('/projects/{project}/edit', '@ProjectsController@edit');

// //POST
// Route::post('/projects', 'ProjectsController@store');

// //PUT
// Route::put('/projects/{project}, @ProjectsController@update');

// //DELETE
// Route::delete('/projects/{project}', '@ProjectsController@delete');

// takes care of all of the necessary routes
