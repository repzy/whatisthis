<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::controller('home', 'HomeController');
Route::controller('article', 'ArticleController');
*/
Route::any('/','HomeController@showIndex');
Route::any('/about','HomeController@showAbout');

Route::any('/articles','ArticleController@indexArticle');
Route::any('/articles/show','ArticleController@showArticle');
Route::any('/articles/add','ArticleController@AddArticle');
Route::any('/articles/delete','ArticleController@DeleteArticle');
