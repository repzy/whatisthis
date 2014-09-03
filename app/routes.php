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
Route::get('/','HomeController@showIndex');
Route::get('/about','HomeController@showAbout');

Route::get('/articles','ArticleController@indexArticle');
Route::get('/articles/show','ArticleController@showArticle');
Route::get('/articles/add','ArticleController@postAddArticle');
Route::get('/articles/delete','ArticleController@postDeleteArticle');
