@extends('layout')

@section('title')
Edit page
@stop

@section('content')
@if ($errors->all())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif

{{ Form::open(array('action' => array('ArticleController@postEditArticle', 'id'=>$post->id), 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal')) }}
<div class="form-group">
    {{ Form::label('title', 'Title', array('class' => "col-sm-2 control-label")) }}
    <div class="col-sm-4">
        {{ Form::input('text', 'Title', $post->title, array('class' => "form-control", 'placeholder'=>"Title")) }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('text', 'Text', array('class' => "col-sm-2 control-label")) }}
    <div class="col-sm-4">
        {{ Form::textarea('Text', $post->text, array('class' => "form-control", 'placeholder'=>"Text input")) }}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Update</button>
    </div>
</div>

{{ Form::close() }}
@stop