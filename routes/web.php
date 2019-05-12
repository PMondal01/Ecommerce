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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/contact', 'PagesController@contact')->name('contact');


Route::get('/products', 'PagesController@products')->name('products');
Route::get('/search', 'PagesController@search')->name('search');




// Admin Routes
Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'AdminPagesController@index')->name('admin.index');


// Product Rputes
    Route::group(['prefix' => '/products'], function(){
    Route::get('/', 'AdminProductController@index')->name('admin.products');
    Route::get('/create', 'AdminProductController@create')->name('admin.product.create');
    Route::get('/edit/{id}', 'AdminProductController@edit')->name('admin.product.edit');

    Route::post('/store', 'AdminProductController@store')->name('admin.product.store');

    Route::post('/product/edit/{id}', 'AdminProductController@update')->name('admin.product.update');
    Route::post('/product/delete/{id}', 'AdminProductController@delete')->name('admin.product.delete');

  });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
