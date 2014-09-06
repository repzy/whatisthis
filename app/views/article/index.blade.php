@extends('layout')

@section('content')
@foreach($posts as $post)
<div class="panel panel-primary col-sm-4">
<div class="panel-heading">
    <div class="panel-title">
        {{ link_to_route('showArticle', $post->title, $post->id) }}
    </div>
</div>
    <div class="panel-body">
        {{{ $post->text }}}
    </div>
</div>
@endforeach
@stop