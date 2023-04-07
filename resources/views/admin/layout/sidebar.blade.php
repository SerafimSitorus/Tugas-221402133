<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{request()->is('admin/dasboard') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/dasboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    

    <!-- Heading -->
    <div class="sidebar-heading">
        Main Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{request()->is('admin/postingan') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/postingan">
            <i class="fas fa-fw fa-folder"></i>
            <span>Semua Postingan</span></a>
    </li>
    <!-- Nav Item - Tables -->
    <li class="nav-item {{request()->is('admin/profil') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/profil">
            <i class="fas fa-fw fa-table"></i>
            <span>Profil</span></a>
    </li>
    <li class="nav-item {{request()->is('admin/beritaterkini') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/beritaterkini">
            <i class="fas fa-fw fa-table"></i>
            <span>Berita Terkini</span></a>
    </li>
    <li class="nav-item {{request()->is('admin/todolist') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/todolist">
            <i class="fas fa-fw fa-folder"></i>
            <span>To-do List</span></a>
    </li>
    <li class="nav-item {{request()->is('admin/randomshits') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/randomshits">
            <i class="fas fa-fw fa-folder"></i>
            <span>Random Shits</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>