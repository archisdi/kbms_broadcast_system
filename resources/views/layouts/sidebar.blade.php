<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li><a href="{{url('/')}}"><i class="fa fa-home text-red"></i> <span>Home</span></a></li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-envelope text-aqua"></i> <span>Broadcast</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('broadcast/anggota')}}"><i class="fa fa-circle-o"></i> Anggota</a></li>
                    <li><a href="{{url('broadcast/pengurus')}}"><i class="fa fa-circle-o"></i> Pengurus</a></li>
                    <li><a href="{{url('broadcast/excel')}}"><i class="fa fa-circle-o"></i> Excel</a></li>
                    <li><a href="{{url('broadcast/direct')}}"><i class="fa fa-circle-o"></i> Direct</a></li>
                </ul>
            </li>
            <li><a href="{{url('modem')}}"><i class="fa fa-laptop text-yellow"></i> <span>Modem</span></a></li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-list"></i> <span>Data</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('anggota/page/1')}}"><i class="fa fa-circle-o"></i> Anggota</a></li>
                    <li><a href="{{url('pengurus/page/1')}}"><i class="fa fa-circle-o"></i> Pengurus</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>