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

Route::get('/',[
    
    'uses' => 'FrontendController@index',
    
    'as'  =>  'index'
    
]);

Route::get('/product/{id}/',[

    'uses' => 'FrontendController@show',

    'as'  =>  'product.single'

]);


Route::resource('/products','ProductsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
