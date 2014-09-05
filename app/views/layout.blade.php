<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap-theme.min.css')}}">
</head>

<body>
    <div id="header">
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/articles/add">ArticlesAdd</a></li>
            <li><a href="/articles/show">ArticlesShow</a></li>
            <li><a href="/articles/delete">ArticlesDelete</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </div>

    <div id="content">
        @yield('content')
    </div>

    <div id="footer">

    </div>

</body>

</html>