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
{{ Form::open(["route" => 'add']) }}
@include('user._article_form', ['btnText' => 'Обновить'])
{{ Form::close() }}

   @include('footer')