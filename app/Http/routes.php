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

// Authentication Admin
Route::get('admin/login', 'Auth\AuthController@getLogin');
Route::post('admin/login', 'Auth\AuthController@postLogin');
Route::get('admin/logout', 'Auth\AuthController@getLogout');

Route::get('admin/register', 'Auth\AuthController@getRegister');
Route::post('admin/register', 'Auth\AuthController@postRegister');

Route::resource('admin/dashboard', 'Admin\DashboardController');

Route::resource('admin/footer', 'Admin\FooterController');
Route::resource('admin/blog', 'Admin\BlogController');
Route::resource('admin/contact', 'Admin\ContactController');


//UploadImage
Route::post('admin/blog/ajaximage', 'Api\ImageController@uploadImage');