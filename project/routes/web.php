<?php

use Illuminate\Filesystem\Filesystem;

// app and resolve are methods that return service container instances
    // The Laravel service container is a powerful tool for managing 
    // class dependencies and performing dependency injection. Dependency 
    // injection is a fancy phrase that essentially means this: 
    // class dependencies are "injected" into the class via the constructor or, 
    // in some cases, "setter" methods.

app()->singleton('example', function () {
    return new \App\Example;
});

// bind method creates new instances and throws them into service container
    // singleton binds one instance

Route::get('/', function () {
    dd(app('example'), app('example'));
    
    return view('welcome');
});

Route::resource('projects', 'ProjectsController');

Route::patch('/tasks/{task}', 'TaskController@update');
Route::post('/projects/{project}/tasks', 'TaskController@store');
Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');

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
