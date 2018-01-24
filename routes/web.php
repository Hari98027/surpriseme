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

Route::get('/','PagesController@index' );
Route::get('/product','PagesController@product' );

Route::get('category/{category_name?}',[
    'uses' => 'CategoryController@index',
    'as' =>'category' ]);

Route::get('/categories','PagesController@category' );

Route::resource('/', 'IndexController');
Route::resource('product','ProductController');


Route::resource('category','CategoryController');