<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>

<body>
    <div id="header">
        @yield('header')
    </div>

    <div id="content">
        @yield('content')
    </div>

    <div id="footer">

    </div>

</body>

</html>