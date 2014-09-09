<?php

class CommentController extends BaseController
{
    public function addComment($id)
    {
        $input = Input::all();

        $validator = Validator::make($input, Comment::$rules);
        if($validator->fails())
        {
            return Redirect::back()
                ->withInput()
                ->withErrors($validator);
        }

        $comment = new Comment();
        $comment->text = $input['Text'];
        $comment->post_id = $id;
        $comment->save();

        return Redirect::route('showArticle', array('id'=>$id));
    }

    public function deleteComment()
    {

    }
}