<div class="form-group">
    {{ Form::label('title', 'Заголовок') }}
    {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' => 'Заголовок']) }}
</div>
<div class="form-group">
    {!! Form::label('short_description', 'Краткое описание') !!}
    {{ Form::textarea('short_description', NULL, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {!! Form::label('body', 'Текст статьи') !!}
    {{ Form::textarea('body', NULL, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {!! Form::label('tag_list','Тэги') !!}
    {{ Form::select('tag_list[]', \App\Tag::pluck('name', 'id'), NULL, ['class' => 'form-control', 'multiple']) }}
</div>
<div class="form-group">
    {{ Form::file('photo[]', ['multiple']) }}

</div>


<button class="btn btn-success btn-lg">{{ $btnText or 'Создать' }}</button>