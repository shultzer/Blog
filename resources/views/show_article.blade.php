@include('head')
<div class="col-sm-8 blog-main">

    <div class="blog-post">

        <h2 class="blog-post-title">{{$article->title}}</h2>
        <p>Автор <a href="/{{$article->user->name}}/detail">{{ $article->user->name }}</a></p>
        <p>Добавлено {{ $article->updated_at }} </p>

        @foreach($article->photos as $photo)
            <p class="blog-post-title"><img src="/images/{{ $photo->photo }}"></p>
        @endforeach

        <p class="blog-post">{!! $article->body !!}</p>
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


        <h3>Комментарии</h3>

        @if($article->comments !== NULL)
            @foreach($article->comments as $comment)
                <h4 class="media-heading">{{ $comment->author }}:</h4>
                <div class="well">
                    <div class="media-body">
                        <p>{{ $comment->body }}</p>
                    </div>
                </div>
            @endforeach


        @endif
        @if(\Illuminate\Support\Facades\Auth::check())
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif



            <h3>Добавить комментарий</h3>
            <div class="well">

                    {{ Form::open(["route" => ['addcomment', 'article' => $article->slug]]) }}
                    <div class="form-group">
                        {{ Form::hidden('author', Auth::user()->name, ['class' => 'form-control']) }}
                        <div class="form-group">
                            {!! Form::label('body', 'Текст комментария') !!}
                            {{ Form::textarea('body', NULL, ['class' => 'form-control']) }}
                        </div>
                        <button class="btn btn-primary btn-lg">Написать комментарий</button>
                    </div>
            </div>
            {{ Form::close() }}

        @endif
    </div><!-- /.blog-post -->


</div><!-- /.blog-main -->
@include('footer')