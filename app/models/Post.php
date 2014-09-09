<?php

class Post extends Eloquent
{
    public static $rules = array(
        'Title' => 'required|min:3|max:100',
        'Text' => 'required|min:10|max:25000'
    );

    public function comments()
    {
        return $this->hasMany('Comment');
    }
}