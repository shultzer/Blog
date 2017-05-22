
    <div class="col-sm-8 blog-main">
@foreach($articles as $article)
        <div class="blog-post">
            <a href="/article/{{ $article->slug }}"> <h2 class="blog-post-title">{{$article->title}}</h2></a>
            <p class="blog-post">{{ $article->short_description }}</p>
        </div><!-- /.blog-post -->
@endforeach


        <nav>
            <ul class="pager">
                {{ $articles->render() }}
            </ul>
        </nav>

    </div><!-- /.blog-main -->
