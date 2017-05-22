@include('head')


    {{ Form::model($article, ["method" => "put", "route" => ['do_update', 'article' => $article->slug]]) }}
    @include('user._article_form', ['btnText' => 'Обновить'])
    {{ Form::close() }}

@include('footer')
