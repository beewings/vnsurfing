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

Route::get('/', 'PagesController@home');
Route::post('/',[
	'as' => 'pages.store',
	'uses' =>'PagesController@store'
]);
Route::get('/admin', 'AdminsController@admin');
Route::get('/admin/addarticles','AdminsController@addarticles');
Route::post('/admin/addarticles',[
	'as' => 'admin.store',
	'uses' =>'AdminsController@store'
]);