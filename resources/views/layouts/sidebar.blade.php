<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Svyatoslav S</strong>
                            </span>
                            <span class="text-muted text-xs block">Bygimotic admin panel <b class="caret"></b></span>
                        </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('admin/login') }}">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        BG
                    </div>
                </li>

                <li>
                    <a href="">
                        <i class="fa fa-edit"></i>
                        <span class="nav-label">Blog</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{url('admin/blog')}}">View all Blogs</a></li>
                        <li><a href="{{url('admin/blog/create')}}">Create new Blog</a></li>
                    </ul>
                </li>

                <li><a href="{{ url('admin/contact/1/edit')}}">Update Contact</a></li>
                <li><a href="{{ url('admin/footer/1/edit')}}">Update Footer</a></li>

            </ul>
        </div>
    </nav>
</div>