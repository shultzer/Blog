@include('head')
    <div class="col-sm-8 blog-main">

            <div class="blog-post">

                <h2 class="blog-post-title">{{$article->title}}</h2>
                <p class="blog-post">{{ $article->updated_at }}</p>
                <p class="blog-post">{{ $article->body }}</p>

                <a href="/article/{{ $article->slug }}/edit">Редактировать</a>
            </div><!-- /.blog-post -->



    </div><!-- /.blog-main -->
@include('footer')