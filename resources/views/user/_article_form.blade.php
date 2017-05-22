<div class="form-group">
    {{ Form::label('title', 'Заголовок') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Заголовок']) }}
</div>
<div class="form-group">
    {!! Form::label('short_description') !!}
    {{ Form::textarea('short_description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {!! Form::label('body') !!}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>

<button class="btn btn-success btn-lg">{{ $btnText or 'Создать' }}</button>
