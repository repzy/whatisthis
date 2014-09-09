@extends('layout')

@section('title')
Articles
@stop

@section('header')
@include('header')
@stop

@section('content')
@foreach($posts as $post)
<div class="post col-sm-4">
<div class="post-header">
    <div class="post-title">
        {{ link_to_route('showArticle', $post->title, $post->id) }}
        <div class="post-date">Created at:  {{ $post->created_at }}</div>
    </div>
</div>
    <div class=" post-small post-content">
        <div class="post-small-text">{{{ $post->text }}}</div>
    </div>
</div>
@endforeach
@stop