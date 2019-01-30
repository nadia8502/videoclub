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



//Route::get('/','HomeController@getHome');

//Route::get('auth/login', function() {
//	return view('auth.login');
//});

//Route::get('/logout', function(){
//	return view('logout');
//});

Route::group(['middleware' => 'auth'], function(){
	Route::get('/catalog','CatalogController@getIndex');
	Route::get('catalog/show/{id?}','CatalogController@getShow');
	Route::get('catalog/create','CatalogController@getCreate');
	Route::get('catalog/edit/{id?}','CatalogController@getedit');
	Route::POST('catalog/create', 'CatalogController@postCreate');
	Route::PUT('catalog/edit/{id}', 'CatalogController@putEdit');
}
);




Route::get('partials/navbar', function(){
	return view('partials.navbar');
});
//Route::get('layouts/master', function(){
//	return view('layouts.master');
//});
Auth::routes();

Route::get('/', 'HomeController@index');

//Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
