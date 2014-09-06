@extends('layout')

@section('title')
Show page
@stop

@section('content')
{{{ $post->id}}}<br>
{{{ $post->title}}}<br>
{{{ $post->text}}}<br>
{{ link_to_route('deleteArticle', 'Delete', $post->id, array('class' => 'btn btn-danger')) }}
{{ link_to_route('editArticle', 'Edit', $post->id, array('class' => 'btn btn-warning')) }}
@stop
