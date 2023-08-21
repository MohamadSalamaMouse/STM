<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="{{route('Admin.category.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Category
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <a href="{{route('Admin.author.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Author
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <a href="{{route('Admin.book.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                           All Book
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <a href="{{route('Admin.book.borrow')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Book Borrow
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <a href="{{route('Admin.users')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            All user
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
            </ul>

                </li>




            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
