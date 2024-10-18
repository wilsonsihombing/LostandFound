<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3">
            Lost and Found
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Laporkan Kehilangan -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('report-loss.create') }}">
            <i class="fas fa-fw fa-exclamation-triangle"></i>
            <span>Laporkan Kehilangan</span></a>
    </li>

    <!-- Nav Item - Laporkan Penemuan -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('report-loss.create') }}">
            <i class="fas fa-fw fa-check-circle"></i>
            <span>Laporkan Penemuan</span></a>
    </li>

    <!-- Nav Item - Data Kehilangan -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('lost-items.index') }}">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Data Kehilangan</span>
        </a>
    </li>


    {{-- <!-- Nav Item - Data Penemuan -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('found-items.index')}}">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Data Penemuan</span></a>
    </li> --}}

    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->
