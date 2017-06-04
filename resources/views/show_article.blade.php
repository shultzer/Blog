@include('head')
    <div class="col-sm-8 blog-main">

            <div class="blog-post">

                <h2 class="blog-post-title">{{$article->title}}</h2>
                <p>Автор <a href="/{{$article->user->name}}/detail">{{ $article->user->name }}</a></p>
                <p>Добавлено {{ $article->updated_at }} </p>

            @foreach($article->photos as $photo)
                    <img src="/images/{{ $photo->photo }}">
                @endforeach

                <p class="blog-post">{{ $article->body }}</p>
                <p>
                    @if(!empty($article->tags))
                        @foreach($article->tags as $tag)
                            <a href="/tag/{{ $tag->slug }}"><span class="label label-info">{{ $tag->name }}</span></a>
                        @endforeach
                    @endif
                </p>
                @if(\Illuminate\Support\Facades\Auth::check())
                    @if(\Illuminate\Support\Facades\Auth::user()->name == $article->user->name)
                        <a href="/article/{{ $article->slug }}/edit">Редактировать</a>

                        <a href="/article/{{ $article->slug }}/delete">Удалить</a>

                    @endif
                @endif
            </div><!-- /.blog-post -->



    </div><!-- /.blog-main -->
@include('footer')