<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
        <li>
        <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"
            ><i class="fas fa-bars"></i
        ></a>
        </li>
    </ul>
    </form>
    <ul class="navbar-nav navbar-right">
    <li class="dropdown">
        <a
        href="#"
        data-toggle="dropdown"
        class="nav-link dropdown-toggle nav-link-lg nav-link-user"
        >
        <img
            alt="image"
            src="../assets/img/avatar/avatar-1.png"
            class="rounded-circle mr-1"
        />
        <div class="d-sm-none d-lg-inline-block">
            Hi, Sahrul Rafi Zulfitra ( <span style="font-weight: bold">{{ ($role === 'admin') ? 'Admin' : $role }}</span> )
        </div></a
        >
        <div class="dropdown-menu dropdown-menu-right">
        <a href="features-profile.html" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profile
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
        </div>
    </li>
    </ul>
</nav>
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">SDN Ketabang 1 Surabaya</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">Siakad</a>
    </div>
    <ul class="sidebar-menu">
        <!-- <li class="menu-header">Dashboard</li> -->


        <li class="nav-item {{ ($sidebar === 'profile') ? 'active' : '' }} mt-3">
            <a href="/profile" class="nav-link">
                <i class="fas fa-user"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="nav-item {{ ($sidebar === 'jadwal') ? 'active' : '' }}">
            <a href="/jadwal" class="nav-link">
                <i class="fas fa-columns"></i>
                <span>Jadwal Pelajaran</span>
            </a>
        </li>
        <li class="nav-item {{ ($sidebar === 'pengumuman') ? 'active' : '' }}">
            <a href="/pengumuman" class="nav-link">
                <i class="fas fa-bullhorn"></i>
                <span>Pengumuman</span>
            </a>
        </li>
        <li class="nav-item {{ ($sidebar === 'sekolah') ? 'active' : '' }}">
            <a href="/profile-sekolah" class="nav-link">
                <i class="fas fa-school"></i>
                <span>Profile Sekolah</span>
                </a>
        </li>
    </aside>
</div>
