<?php
class Comment extends Eloquent
{
    public static $rules = array(
        'Text' => 'required|min:3|max:250'
    );

    public function post()
    {
        return $this->belongsTo('Post', 'post_id');
    }
}