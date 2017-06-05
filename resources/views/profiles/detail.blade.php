<div class="col-sm-8 blog-main">
    <div class="blog-post">
        <h1 style="color: #1f648b">{{ $u->name }}</h1>
        <h2 style="color: #1f648b">Публикации пользователя {{ $u->name }}</h2>
        @foreach($u->article as $articles)
            <div>
                <a href="/article/{{ $articles->slug }}"><h3>{{ $articles->title }}</h3></a>
            </div><!-- /.blog-post -->
        @endforeach
    </div><!-- /.blog-post -->
    <!-- /.blog-post -->
</div><!-- /.blog-main -->
