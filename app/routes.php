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

Route::any('/', array('as' => 'home', function()
{
    return View::make('home/index');
}));
Route::any('/about', array('as' => 'about', function()
{
    return View::make('home/about');
}));

Route::any('/article', array('as' => 'indexArticle', 'uses' => 'ArticleController@indexArticle'));
Route::any('/article/show/{id}', array('as' => 'showArticle', 'uses' => 'ArticleController@showArticle'));
Route::get('/article/add', array('as' => 'addArticle', function()
{ return View::make('article/add'); }));
Route::post('/article/add', array('as' => 'postAddArticle', 'uses' => 'ArticleController@postAddArticle'));
Route::any('/article/delete/{id}', array('as' => 'deleteArticle', 'uses' => 'ArticleController@deleteArticle'));
Route::get('/article/edit/{id}', array('as' => 'editArticle', 'uses' => 'ArticleController@editArticle'));
Route::post('/article/edit/{id}', array('as' => 'postEditArticle', 'uses' => 'ArticleController@postEditArticle'));
Route::post('/article/comment/add/{id}', array('as' => 'addComment', 'uses' => 'CommentController@addComment'));