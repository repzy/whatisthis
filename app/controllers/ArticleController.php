<?php
/**
 * Created by PhpStorm.
 * User: repzy
 * Date: 02.09.14
 * Time: 19:53
 */

class ArticleController extends BaseController
{
    public function indexArticle()
    {   $data = Input::all();
        $vyy = var_dump($data);
        return View::make('articles/index', array('var'=>'jjj'));
    }

    public function showArticle()
    {
        return View::make('articles/show');
    }

    public function AddArticle()
    {
        return View::make('articles/add');
    }

    public function DeleteArticle()
    {
        return View::make('articles/delete');
    }
}