@include('head')
    <div class="col-sm-8 blog-main">

            <div class="blog-post">

                <h2 class="blog-post-title">{{$article->title}}</h2>
                <p>Автор <a href="/{{$article->user->name}}/detail">{{ $article->user->name }}</a></p>
                <p>Добавлено {{ $article->updated_at }} </p>

                <p class="blog-post">{{ $article->body }}</p>
                @if(\Illuminate\Support\Facades\Auth::user()->name == $article->user->name)
                <a href="/article/{{ $article->slug }}/edit">Редактировать</a>
                    @endif
            </div><!-- /.blog-post -->



    </div><!-- /.blog-main -->
@include('footer')