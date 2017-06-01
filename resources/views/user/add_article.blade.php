@include('head')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
{{ Form::open(["route" => 'add', 'files' => true]) }}
@include('user._article_form', ['btnText' => 'Создать'])
{{ Form::close() }}

   @include('footer')