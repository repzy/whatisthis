@extends('layout')

@section('title')
Login
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

@if (isset($message))
<div class="alert alert-success">
    <p>{{ $message }}</p>>
</div>
@endif

<div class="sign">
    <div class="register">
        {{ Form::open(array('url' => action('UsersController@Register'), 'method' => 'post', 'role' => 'form', 'class' => 'form-signin')) }}
            <h2 class="form-signin-heading">Register</h2>
            {{ Form::input('text', 'username', null, array('class' => "form-control", 'placeholder'=>"Username")) }}
            {{ Form::input('email', 'email', null, array('class' => "form-control", 'placeholder'=>"Email address")) }}
            {{ Form::input('password', 'password', null, array('class' => "form-control", 'placeholder'=>"Password")) }}
            {{ Form::input('password_confirmation', 'password_confirmation', null, array('class' => "form-control", 'placeholder'=>"Confirm password")) }}
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        {{ Form::close() }}
    </div>

    <div class="login">
        {{ Form::open(array('url' => action('UsersController@Login'), 'method' => 'post', 'role' => 'form', 'class' => 'form-signin')) }}
            <h2 class="form-signin-heading">Sign in</h2>
            {{ Form::input('text', 'username', null, array('class' => "form-control", 'placeholder'=>"Username" )) }}
            {{ Form::input('password', 'password', null, array('class' => "form-control", 'placeholder'=>"Password")) }}
            <br>
            <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
        {{ Form::close() }}
    </div>
</div>
@stop