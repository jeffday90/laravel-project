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

// sends a get route to PagesController
Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@about');
Route::get('/about', 'PagesController@contact');