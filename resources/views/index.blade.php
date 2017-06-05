@include('head')
<div class="row">

    @include('body')

    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            <h4>О сайте</h4>
            <p>Блог на Bootstrap и Laravel</p>
        </div>
        <div class="sidebar-module">
            <h4>Пользователи</h4>
            <ol class="list-unstyled">
                @foreach($users as $user)

                    <li><a href="/{{$user->name}}/detail">{{$user->name}}</a></li>
                @endforeach
            </ol>
        </div>
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->
@include('footer')
