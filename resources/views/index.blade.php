@include('head')
<div class="row">

    @include('body')

    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            <h4>О сайте</h4>
            <p>A multi-user web application with the ability to keep their blogs and comment on articles from other
                users.
                The functionality for adding arctilces appears after registration or logging in of the registered user.
                Ability to edit and delete only your articles.</p>

            <p>Многопользовательское вебприложение с возможностью ведения пользователями своих блогов и комментирования

                статей других пользователей. Функционал для добавления статей появляется после регистрации или входа
                зарегистрированного пользователя.
                Возможность редактировать и удалять только свои статьи.</p>
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
