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
            <?php ($url = \Illuminate\Support\Facades\Request::url()); ?>

            <a class="blog-nav-item <?php if($url == 'http://blog'): ?>active <?php endif; ?>" href="/">Главная</a>

            <?php if(\Illuminate\Support\Facades\Auth::check()): ?>
                <a class="blog-nav-item <?php if($url == 'http://blog/add'): ?>active <?php endif; ?>" href="/add">Опубликовать статью</a>
            <?php endif; ?>


            <div style="float: right"><?php if(Auth::guest()): ?>
                    <a class="blog-nav-item" href="<?php echo e(route('login')); ?>">Login</a>
                    <a class="blog-nav-item" href="<?php echo e(route('register')); ?>">Register</a>
                <?php else: ?>
            </div>

            <div style="float: right">
                <a href="#" class="blog-nav-item" data-toggle="dropdown" role="button" aria-expanded="false">
                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                </a>


                <a href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>


            <?php endif; ?>
        </nav>
    </div>
</div>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title"><a href="/">The Blog</a></h1>
    </div>
    <?php if(session('status') !== NULL): ?>
        <div class="alert alert-success"><?php echo e(session('status')); ?></div>
<?php endif; ?>
