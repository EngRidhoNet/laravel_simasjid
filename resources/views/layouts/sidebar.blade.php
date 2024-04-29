<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
            <i class="fas fa-mosque"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SI MASJID</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('jamaah') }}">
            <i class="fa fa-child"></i>
            <span>Jamaah</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{ route('masjid') }}">
            <i class="fas fa-mosque"></i>
            <span>Masjid</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('kegiatan') }}">
           <i class="fas fa-tasks"></i>
            <span>kegiatan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('donasi') }}">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Donasi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/profile">
            <i class="fa fa-street-view"></i>
            <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
