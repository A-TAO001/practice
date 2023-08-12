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
//     return view('top');
// });
Route::group(['middleware' => 'auth'], function() {
Route::get('top/', 'TopController@index')->name('top');
Route::get('top/{id}', 'ProductController@delete')->name('delete');
Route::post('top/search', 'ProductController@search')->name('search');


Route::get('entry', 'ProductController@index')->name('entry_view');
Route::post('entry', 'ProductController@entry')->name('product_entry');

Route::get('/product/{id}', 'ProductController@deta')->name('deta');
Route::get('/deta/{id}', 'ProductController@update_view')->name('update_view');

Route::put('/update/{id}', 'ProductController@update_edit')->name('update_edit');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});

Auth::routes();