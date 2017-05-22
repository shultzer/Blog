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
    <form action="add" method="post" class="form-group">
        <input type="hidden" value="{{ csrf_token() }}" name="{{'_token' }}">

        <label for="title">Заголовок</label>
        <input class="form-control" id="title" name="title">
{{--
        <label for="photo">Вставьте URL фото</label>
        <input class="form-control" type="text" id="photo">--}}

        <label for="short_description">Короткое описание</label>
        <textarea class="form-control"  class="form-group" id="short_description" name="short_description"></textarea><br>

        <label for="body" >Текст статьи</label>
        <textarea  rows="10" class="form-control"  class="form-group" id="body" name="body"></textarea>
<br>
        <input class="btn btn-primary" type="submit" value="Опубликовать">

    </form>

    </div>
   @include('footer')