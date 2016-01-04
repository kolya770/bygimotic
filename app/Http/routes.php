<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'LandingController@index');
Route::get('/contacts', 'LandingController@contacts');
Route::get('/categories-article', 'LandingController@categoriesArticle');
Route::get('/categories', 'LandingController@categories');

// Shop online magazine
Route::get('/store', 'ShopController@index');
Route::get('store/edit', 'ShopController@detail');
Route::get('store/cart', 'ShopController@cart');

// Authentication Admin
Route::get('admin/login', 'Auth\AuthController@getLogin');
Route::post('admin/login', 'Auth\AuthController@postLogin');
Route::get('admin/logout', 'Auth\AuthController@getLogout');

Route::get('admin/register', 'Auth\AuthController@getRegister');
Route::post('admin/register', 'Auth\AuthController@postRegister');

// Admin main page "dashboard"
Route::resource('admin/dashboard', 'Admin\DashboardController');

// CRUD Admin panel
Route::resource('admin/footer', 'Admin\FooterController');
Route::resource('admin/blog', 'Admin\BlogController');
Route::resource('admin/contact', 'Admin\ContactController');
Route::resource('admin/store', 'Admin\StoreController');

//UploadImage
Route::post('admin/ajaximage', 'Api\ImageController@uploadImage');