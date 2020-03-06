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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/project/laran', function () {
//    return view('design');
//});

Route::get('/', 'homeController@index');

Route::get('/addProduct', 'productController@add');

Route::post('/upload','productController@dbupload');

Route::get('/delete/{id}','productController@delete');

Route::get('/view_full/{id}','homeController@view_full');



