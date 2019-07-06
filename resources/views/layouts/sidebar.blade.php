<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
    
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="images/admin.png" class="img-circle" alt="User Image">

                </div>
                <div class="pull-left info">
                    {{-- <p>{{Auth::User()->name}}</p> --}}
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
            <li class="header"> </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-product-hunt"></i> <span>Products</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('products.create')}}">Create</a></li>
                        <li><a href="{{route('products.index')}}">View All</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa  fa-picture-o"></i> <span>Photos</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('photos.create')}}">Create</a></li>
                        <li><a href="{{route('photos.index')}}">View All</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa  fa-info-circle"></i> <span>Information</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('information.create')}}">Create</a></li>
                        <li><a href="{{route('information.index')}}">View All</a></li>
                    </ul>
                </li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>