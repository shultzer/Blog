
    <div class="col-sm-8 blog-main">
@foreach($articles as $article)
        <div class="blog-post">

            @foreach($article->photos as $photo)
            @php($thumbarr[] = $photo->thumbnails)
            @endforeach
                <img src="images/{{ $thumbarr[0] }}">
            <a href="/article/{{ $article->slug }}"> <h2 class="blog-post-title">{{$article->title}}</h2></a>
            <p class="blog-post">{{ $article->short_description }}</p>

        </div><!-- /.blog-post -->
    <?php unset($thumbarr)?>
@endforeach


        <nav>
            <ul class="pager">
                {{ $articles->render() }}
            </ul>
        </nav>

    </div><!-- /.blog-main -->
