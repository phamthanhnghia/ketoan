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
Route::group(array('prefix' => '/'), function()
{
    Route::get('/', 'MainController@index');
    Route::post('/login', 'MainController@login');
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

// routes for bill_detail.
Route::group(array('prefix' => 'bill_detail'), function()
{
    Route::get('/', 'Bill_detailController@index');
    Route::get('/add-bill_detail', 'Bill_detailController@add');
    Route::post('/add-bill_detail-post', 'Bill_detailController@addPost');
    Route::get('/delete-bill_detail/{id}', 'Bill_detailController@delete');
    Route::get('/edit-bill_detail/{id}', 'Bill_detailController@edit');
    Route::post('/edit-bill_detail-post', 'Bill_detailController@editPost');
    Route::get('/change-status-bill_detail/{id}', 'Bill_detailController@changeStatus');
    Route::get('/view-bill_detail/{id}', 'Bill_detailController@view');
});
// end of bill_detail routes

// routes for accouting_account.
Route::group(array('prefix' => 'accouting_account'), function()
{
    Route::get('/', 'Accouting_accountController@index');
    Route::get('/add-accouting_account', 'Accouting_accountController@add');
    Route::post('/add-accouting_account-post', 'Accouting_accountController@addPost');
    Route::get('/delete-accouting_account/{id}', 'Accouting_accountController@delete');
    Route::get('/edit-accouting_account/{id}', 'Accouting_accountController@edit');
    Route::post('/edit-accouting_account-post', 'Accouting_accountController@editPost');
    Route::get('/change-status-accouting_account/{id}', 'Accouting_accountController@changeStatus');
    Route::get('/view-accouting_account/{id}', 'Accouting_accountController@view');
});
// end of accouting_account routes