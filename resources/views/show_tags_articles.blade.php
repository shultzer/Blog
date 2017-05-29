@include('head')
<div class="col-sm-8 blog-main">

    @foreach($tags as $item)
        @foreach($item->articles as $articles)
            <div class="blog-post">
                <a href="/article/{{ $articles->slug }}"> <h2 class="blog-post-title">{{ $articles->title }}</h2></a>
            </div><!-- /.blog-post -->
        @endforeach
    @endforeach




</div><!-- /.blog-main -->
@include('footer')