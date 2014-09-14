@extends('layout')

@section('title')
Add page
@stop

@section('header')
@include('header')
@stop

@section('content')

@if ($errors->all())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif

{{ Form::open(array('url' => action('ArticleController@postAddArticle'), 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal')) }}
<div class="form-group">
    {{ Form::label('title', 'Title', array('class' => "col-sm-2 control-label")) }}
    <div class="col-sm-4">
        {{ Form::input('text', 'Title', null, array('class' => "form-control", 'placeholder'=>"Title")) }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('text', 'Text', array('class' => "col-sm-2 control-label")) }}
    <div class="col-sm-4">
        {{ Form::textarea('Text', null, array('class' => "form-control", 'placeholder'=>"Text input")) }}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Create</button>
    </div>
</div>
{{ Form::close() }}
@stop