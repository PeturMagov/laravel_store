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
Route::get('/', [
	'uses' => 'HomeController@index',
	'as' => 'index'
]);
Route::get('/brands', [
	'uses' => 'BrandsController@index',
	'as' => 'brands'
]);
Route::get('/brand/create', [
	'uses' => 'BrandsController@create',
	'as' => 'brand.create'
]);
Route::post('/brand/store', [
	'uses' => 'BrandsController@store',
	'as' => 'brand.store'
]);
Route::get('/brand/edit/{id}', [
	'uses' => 'BrandsController@edit',
	'as' => 'brand.edit'
]);
Route::post('/brand/update/{id}', [
	'uses' => 'BrandsController@update',
	'as' => 'brand.update'
]);
Route::get('/brand/delete/{id}', [
	'uses' => 'BrandsController@destroy',
	'as' => 'brand.delete'
]);
Route::get('/brand/view/{id}', [
	'uses' => 'BrandsController@show',
	'as' => 'brand.view'
]);
Route::get('/products', [
	'uses' => 'ProductsController@index',
	'as' => 'products'
]);
Route::get('/product/create', [
	'uses' => 'ProductsController@create',
	'as' => 'product.create'
]);
Route::post('/product/store', [
	'uses' => 'ProductsController@store',
	'as' => 'product.store'
]);
Route::get('/product/edit/{id}', [
	'uses' => 'ProductsController@edit',
	'as' => 'product.edit'
]);
Route::post('/product/update/{id}', [
	'uses' => 'ProductsController@update',
	'as' => 'product.update'
]);
Route::get('/product/delete/{id}', [
	'uses' => 'ProductsController@destroy',
	'as' => 'product.delete'
]);
Route::get('/product/view/{id}', [
	'uses' => 'ProductsController@show',
	'as' => 'product.view'
]);
Route::get('/unit/create', [
	'uses' => 'UnitsController@create',
	'as' => 'unit.create'
]);
Route::post('/unit/store', [
	'uses' => 'UnitsController@store',
	'as' => 'unit.store'
]);
Route::get('/units', [
	'uses' => 'UnitsController@index',
	'as' => 'units'
]);
Route::get('/unit/edit/{id}', [
	'uses' => 'UnitsController@edit',
	'as' => 'unit.edit'
]);
Route::post('/unit/update/{id}', [
	'uses' => 'UnitsController@update',
	'as' => 'unit.update'
]);
Route::get('/unit/delete/{id}', [
	'uses' => 'UnitsController@destroy',
	'as' => 'unit.delete'
]);
Route::get('/unit/view/{id}', [
	'uses' => 'UnitsController@show',
	'as' => 'unit.view'
]);

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::post('/index', 'HomeController@index')->name('index');
