<div class="col-sm-8 blog-main">

    <div class="blog-post">
        <h2 style="color: #1f648b">{{$user}}</h2>

        @foreach($u as $item)

            @foreach($item->article as $articles)
                <div>
                    <h2 style="color: #1f648b">Публикации пользователя {{$user}}</h2>
                    <a href="/article/{{ $articles->slug }}"><h3>{{ $articles->title }}</h3></a>
                </div><!-- /.blog-post -->
            @endforeach
        @endforeach


    </div><!-- /.blog-post -->

    <!-- /.blog-post -->


</div><!-- /.blog-main -->
