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

Route::get('/', ['as'=>'home', 'uses'=>'Admin\IndexController@show']);

Route::get('/about', ['uses'=>'Admin\AboutController@show', 'as'=>'about']);


Route::get('/articles',['uses'=>'Admin\Core@getArticles', 'as'=>'articles']);


Route::get('/article/{id}',[/*'middleware'=>'mymiddle:home',*/'uses'=>'Admin\Core@getArticle', 'as'=>'article'])/*->middleware['mymiddle']*/;

Route::get('/contact/',['uses'=>'Admin\ContactController@show','as'=>'contact']);
Route::post('/contact',['uses'=>'Admin\ContactController@store']);
//list pages
//Route::get('pages/add','Admin\CoreResource@add');
//Route::resource('/pages', 'Admin\CoreResource',['except'=>['index', 'show']]);

