
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Admin'); ?>">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3" href="<?= base_url('Admin'); ?>">Pustaka Booking</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Looping Menu -->

    <!-- Heading -->
    <div class="sidebar-heading">
        Home
    </div>

        <!-- Nav Item - Dashboard --> 
        <li class="nav-item active"> 
            <!-- Nav Item - Dashboard --> 
            <li class="nav-item"> 
                <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>"> 
                    <i class="fa fa-fw fa-book"></i> 
                    <span>Kategori Buku</span></a> 
            </li>

            <li class="nav-item"> 
                <a class="nav-link collapsed" href="<?= base_url('buku'); ?>" >
                    <i class="fas fa-fw fa-book"></i> 
                    <span>Data Buku</span></a> </li> 
            </li>
         
        <li class="nav-item active"> 
            <!-- Nav Item - Dashboard --> 
            <li class="nav-item"> 
                <a class="nav-link collapsed" href="<?= base_url('user/anggota'); ?>" >
                    <i class="fas fa-fw fa-book"></i> 
                    <span>Data Anggota</span></a> </li> 
            </li>

    

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li>


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->