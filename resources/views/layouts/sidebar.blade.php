<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Bygimotic</strong>
                            </span>
                            <span class="text-muted text-xs block">Панель администрации<b class="caret"></b></span>
                        </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Профиль</a></li>
                            <li><a href="contacts.html">Контакты</a></li>
                            <li><a href="mailbox.html">Почтовый ящик</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('admin/logout') }}">Выйти</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        BG
                    </div>
                </li>

                <li>
                    <a href="">
                        <i class="fa fa-edit"></i>
                        <span class="nav-label">Блог</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{url('admin/blog')}}">Просмотреть все блоги</a></li>
                        <li><a href="{{url('admin/blog/create')}}">Создать новый блог</a></li>
                    </ul>
                </li>

                <li>
                    <a href="">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="nav-label">Продукты</span>
                        <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{url('admin/store')}}">Посмотреть все продукты</a></li>
                        <li><a href="{{url('admin/store/create')}}">Добавить новый продукт</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('admin/contact/1/edit')}}">
                        <i class="fa fa-edit"></i>
                        <span class="nav-label">Обновить контакты</span></a>
                </li>
                <li>
                    <a href="{{ url('admin/footer/1/edit')}}">
                        <i class="fa fa-edit"></i>
                        <span class="nav-label">Обновить футер</span></a>
                </li>


            </ul>
        </div>
    </nav>
</div>