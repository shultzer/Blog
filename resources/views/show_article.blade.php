@include('head')
    <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <h2 class="blog-post-title">{{$article->title}}</h2>
                <p class="blog-post">{{ $article->body }}</p>
            </div><!-- /.blog-post -->



    </div><!-- /.blog-main -->
@include('footer')