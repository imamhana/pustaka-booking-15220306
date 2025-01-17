<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-cyan sidebar sidebar-gray" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">

        <div class="sidebar-brand-icon "> <i class="fas fa-bold"></i> </div>
        <div class="sidebar-brand-text mx-3">Pustaka Booking</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Looping Menu-->
    <div class="sidebar-heading"> Home </div>

    <li class="nav-item active">

        <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
            <i class="fa fa-fw fa-university"></i>
            <span>Dashboard</span></a>
    </li>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Heading -->
    <div class="sidebar-heading"> Master Data </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">

        <!-- Nav Item - Dashboard -->
    <li class="nav-item"> <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>">
            <i class="fa fa-fw fa-database"></i>
            <span>Kategori Buku</span></a> </li>
    <li class="nav-item"> <a class="nav-link pb-0" href="<?= base_url('buku'); ?>">
            <i class="fa fa-fw fa-bold"></i>
            <span>Data Buku</span></a> </li>
    <li class="nav-item"> <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
            <i class="fa fa-fw fa-users"></i>
            <span>Data Anggota</span></a> </li>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('autentifikasi/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>

    </div>
</ul>

<!-- End of Sidebar -- >