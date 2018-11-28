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

// routes for users.
Route::group(array('prefix' => 'users'), function()
{
    Route::get('/', 'UsersController@index');
    Route::get('/add-users', 'UsersController@add');
    Route::post('/add-users-post', 'UsersController@addPost');
    Route::get('/delete-users/{id}', 'UsersController@delete');
    Route::get('/edit-users/{id}', 'UsersController@edit');
    Route::post('/edit-users-post', 'UsersController@editPost');
    Route::get('/change-status-users/{id}', 'UsersController@changeStatus');
    Route::get('/view-users/{id}', 'UsersController@view');
});
// end of users routes

// routes for bill.
Route::group(array('prefix' => 'bill'), function()
{
Route::get('/', 'BillController@index');
Route::get('/add-bill', 'BillController@add');
Route::post('/add-bill-post', 'BillController@addPost');
Route::get('/delete-bill/{id}', 'BillController@delete');
Route::get('/edit-bill/{id}', 'BillController@edit');
Route::post('/edit-bill-post', 'BillController@editPost');
Route::get('/change-status-bill/{id}', 'BillController@changeStatus');
Route::get('/view-bill/{id}', 'BillController@view');
});
// end of bill routes