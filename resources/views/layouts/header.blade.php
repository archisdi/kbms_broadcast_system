<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>K</b>B</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>KBMS </b><small>Broadcaster</small></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    @if(Auth::user())
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span>{{Auth::user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                        </ul>
                    @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span><span class="fa fa-gear"></span></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('/login')}}"><i class="fa fa-sign-in fa-fw"></i> Login</a>
                            </li>
                        </ul>
                    @endif
                </li>
            </ul>
        </div>
    </nav>
</header>