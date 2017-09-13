<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard text-aqua"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-circle-o text-red"></i>
                    <span>Room Management</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('room_type.create')}}"><i class="fa fa-plus"></i> Add new room type</a></li>
                    <li><a href="{{route('room_type.index')}}"><i class="fa fa-home"></i>Manage room types</a></li>
                    <li><a href="{{route('room.create')}}"><i class="fa fa-plus"></i> Add new room</a></li>
                    <li><a href="{{route('room.index')}}"><i class="fa fa-home"></i>Manage room</a></li>
                </ul>
            </li>


            <li class="header">Resources</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> Policy</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Procedures</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Templates</a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>