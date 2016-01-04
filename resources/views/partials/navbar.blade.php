<div id="top_nav" class="full-navbar">
    <a href="#" id="logo" class="logo" data-spy="affix" data-offset-top="100"><img src="../img/logo.png"></a>
    <img id="rain" class="rainbow" src="../img/rainbow.png" data-spy="affix" data-offset-top="100" style="opacity: 0;">
    <!-- /.container-fluid -->
    <nav id="nav1" class="navbar navbar-bygimotic center-block" data-spy="affix" data-offset-top="100">
        <div class="container my-navbar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle mobile-nav collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar my-icon-bar"></span>
                    <span class="icon-bar my-icon-bar"></span>
                    <span class="icon-bar my-icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse mobile-menu" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown main-page">
                        <a href="{{url('/')}}" class=""  role="button" aria-haspopup="true" aria-expanded="false">Головна<span class="caret"></span></a>
                        <ul class="dropdown-menu my-menu">
                            <li><a href="#">пункт меню один</a></li>
                            <li><a href="#">пункт меню один</a></li>
                            <li><a href="#">пункт меню один</a></li>
                            <li><a href="#">пункт меню один</a></li>
                            <li><a href="#">пункт меню один</a></li>
                            <li><a href="#">пункт меню один</a></li>
                            <li><a href="#">пункт меню один</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Фотогалерея</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right right-nav">
                    <li><a href="{{ url('/categories') }}" class="">Категории</a></li>
                    <li><a href="{{ url('/contacts') }}" class="position-cn">Контакты</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
