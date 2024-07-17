<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-bg-dark sidebar-color-primary shadow">
    <div class="brand-container">
        <a href="javascript:;" class="brand-link">
            <img src="./assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-80 shadow" />
            <span class="brand-text fw-light">Admin Dashboard</span>
        </a>
        <a class="pushmenu mx-1" data-lte-toggle="sidebar-mini" href="javascript:;" role="button"><i
                class="fas fa-angle-double-left"></i></a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <!-- Sidebar Menu -->
            <ul class="nav nav-pills nav-sidebar flex-column" data-lte-toggle="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header">Master</li>
                <li class="nav-item">
                    <a href="{{route('so.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>Strktur Organisasi</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
