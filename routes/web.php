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
//     return view('welcome');
// });
// routes for main.
Route::group(array('prefix' => 'main'), function()
{
Route::get('/', 'MainController@index');
Route::get('/add-main', 'MainController@add');
Route::post('/add-main-post', 'MainController@addPost');
Route::get('/delete-main/{id}', 'MainController@delete');
Route::get('/edit-main/{id}', 'MainController@edit');
Route::post('/edit-main-post', 'MainController@editPost');
Route::get('/change-status-main/{id}', 'MainController@changeStatus');
Route::get('/view-main/{id}', 'MainController@view');
});
// end of main routes