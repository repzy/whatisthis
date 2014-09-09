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
    {
        $posts = Post::all();
        return View::make('article/index', array('posts'=>$posts));
    }

    public function showArticle($id)
    {
        $post = Post::findOrFail($id);
        $comments = Post::find($id)->comments;
        return View::make('article/show', array('post'=>$post, 'comments'=>$comments));
    }

    public function postAddArticle()
    {
        $input = Input::all();
        $validator = Validator::make($input, Post::$rules);
        if ($validator->fails())
        {
            return Redirect::back()
            ->withInput()
            ->withErrors($validator);
        }

        $post = new Post;
        $post->title = $input['Title'];
        $post->text = $input['Text'];
        $post->save();

        return Redirect::route('indexArticle');
    }

    public function deleteArticle($id)
    {
        $post = Post::find($id);
        $post->delete();
        return Redirect::route('indexArticle');
    }

    public function editArticle($id)
    {
        $post = Post::findOrFail($id);
        return View::make('article/edit', array('post'=>$post));
    }

    public function postEditArticle($id)
    {
        $input = Input::all();

        $post = Post::findOrFail($id);
        $post->title = $input['Title'];
        $post->text = $input['Text'];
        $post->save();

        return Redirect::route('indexArticle');
    }
}