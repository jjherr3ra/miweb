<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@getHome');
Route::get('auth/login', function () {
      return view('auth.login');
});
Route::get('auth/logout', function () {
      return view('auth.logout');
});
Route::get('catalog', 'CatalogController@getIndex');
Route::get('catalog/show/{id}', 'CatalogController@getShow');
Route::get('catalog/create', 'CatalogController@getCreate');
Route::get('catalog/edit/{id}', 'CatalogController@getEdit');
/*
Route::get('catalog/show/{id}', function($id)
{
    return view('catalog.show', array('id'=>$id));
});
Route::get('catalog/create', function () {
      return view('catalog.create');
});
Route::get('catalog/edit/{id}', function($id)
{
    return view('catalog.edit', array('id'=>$id));
});
*/
/*Route::get('user/{name?}', function($name = 'Ale')
{
    return $name;
});*/
