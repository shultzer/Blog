<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Blog Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <!-- Custom styles for this template -->
  <link href="/css/blog.css" rel="stylesheet">

</head>

<body>

<div class="blog-masthead">
  <div class="container">
    <nav class="blog-nav">
      <a class="blog-nav-item active" href="/">Home</a>
      <a class="blog-nav-item" href="add">Добавить статью</a>
      <a class="blog-nav-item" href="#">Press</a>
      <a class="blog-nav-item" href="#">New hires</a>
      <a class="blog-nav-item" href="#">About</a>
    </nav>
  </div>
</div>

<div class="container">

  <div class="blog-header">
    <h1 class="blog-title">The  Blog</h1>
    <p class="lead blog-description">The official  blog with Bootstrap on Laravel.</p>
  </div>

<div class="container">

  <form action="/add" method="post" class="form-group">
  <input type="hidden" value="{{ csrf_token() }}" name="_token">
  <label for="title">Заголовок</label>
  <textarea id="title" name="title"></textarea>
  <label for="body" >Текст статьи</label>
  <textarea id="body" name="body"></textarea>
  <input type="submit">

</form>
</div>