<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <form class="form-inline" action="{{ route('Admin.search') }}" method="POST">
            @csrf
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search student by id" aria-label="Search" name="search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar" type="submit">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </form>

        @if(isset($results))
            <div>
                <h2>Search Results</h2>
                @if($results->isEmpty())
                    <p>No results found.</p>
                @else
                    <ul>
                        @foreach($results as $result)
                            <li>{{ $result->name }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endif

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
