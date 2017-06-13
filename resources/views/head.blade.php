<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="blog auto news comments">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>LaraBlog</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>

</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            @php($url = \Illuminate\Support\Facades\Request::url())

            <a class="blog-nav-item @if($url == 'http://blog')active @endif" href="/">Главная</a>

            @if(\Illuminate\Support\Facades\Auth::check())
                <a class="blog-nav-item @if($url == 'http://blog/add')active @endif" href="/add">Опубликовать статью</a>
            @endif


            <div style="float: right">@if (Auth::guest())
                    <a class="blog-nav-item" href="{{ route('login') }}">Login</a>
                    <a class="blog-nav-item" href="{{ route('register') }}">Register</a>
                @else
            </div>

            <div style="float: right">
                <a href="#" class="blog-nav-item" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>


                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>


            @endif
        </nav>
    </div>
</div>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title"><a href="/">The Blog</a></h1>
    </div>
    @if(session('status') !== NULL)
        <div class="alert alert-success">{{ session('status') }}</div>
@endif
