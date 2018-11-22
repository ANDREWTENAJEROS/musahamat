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

/*
Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name.' with an id of '.$id;
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('supplier', 'supplierController');
Route::resource('product_lines', 'product_linesController');
Route::resource('product_lines/create_fpa', 'product_lines@create_fpa');

Auth::routes();
Route::put('roduct_lines/create/{id}', 'UserController@update');
// Route::get('/', 'DashboardController@index');
