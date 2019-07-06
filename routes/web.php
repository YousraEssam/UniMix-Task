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

Route::get('/', function(){
    return(view('home_page'));
});

Route::resource('products','ProductsController');

Route::resource('photos','PhotosController');

Route::resource('information','InformationController');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/allproducts', 'ProductsController@show_all_products');