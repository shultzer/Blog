@include('head')
<div class="col-sm-8 blog-main">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::model($article, ["method" => "put", "route" => ['do_update', 'article' => $article->slug]]) }}
    @include('user._article_form', ['btnText' => 'Обновить'])
    {{ Form::close() }}

@include('footer')
