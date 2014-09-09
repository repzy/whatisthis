@extends('layout')

@section('title')
Show page
@stop

@section('header')
@include('header')
@stop

@section('content')
<div class="post">
    <div class="post-header">
        <div class="post-title">{{{ $post->title}}}</div>
    </div>
    <br>
    <div class="post-content">
        {{{ $post->text}}}<br>
    </div>
    <div class="post-button">
        {{ link_to_route('editArticle', 'Edit', $post->id, array('class' => 'btn btn-default')) }}
        {{ link_to_route('deleteArticle', 'Delete', $post->id, array('class' => 'btn btn-default')) }}
    </div>
<br>
<br>
</div>
<div class="post">
    @foreach($comments as $comment)
    <p class="post-content">{{ $comment->text }}</p>
    @endforeach
    <br>

    {{ Form::open(array('url' => action('CommentController@addComment', $post->id), 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal')) }}
    <div class="">
        <div class="">
            {{ Form::textarea('Text', null, array('class' => "form-control", 'placeholder'=>"Leave your comment here", 'rows'=>4)) }}
        </div>
    </div>
    <div class="">
        <div class="post-button">
            <button type="submit" class="btn btn-default">Create</button>
        </div>
    </div>
    {{ Form::close() }}
</div>
@stop
