<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-text ">SPK PILMAPRES</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $page === 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fire-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>

    <li class="nav-item {{ $page === 'alternatif' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('alternatif.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Alternatif</span>
        </a>
    </li>

    <li class="nav-item {{ $page === 'kriteria' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kriteria.index') }}">
            <i class="fas fa-fw fa-poll-h"></i>
            <span>Kriteria</span>
        </a>
    </li>

    <li class="nav-item {{ $page === 'nilai' ? 'active' : '' }}">
        <a class="nav-link" href="">
            <i class="fas  fa-fw fa-file-invoice"></i>
            <span>Nilai</span>
        </a>
    </li>

    <li class="nav-item {{ $page === 'metode' ? 'active' : '' }}">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-spinner"></i>
            <span>Metode</span>
        </a>
    </li>

    <li class="nav-item {{ $page === 'laporan' ? 'active' : '' }}">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-file-pdf"></i>
            <span>Laporan</span>
        </a>
    </li>

    {{-- @if (Auth::user()->role == 'admin')
        <li class="nav-item {{ $page === 'kriteria' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('indexKriteria') }}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Data Kriteria</span></a>
        </li>

        <li class="nav-item {{ $page === 'subkriteria' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('indexSubKriteria') }}">
                <i class="fas fa-fw fa-folder-open"></i>
                <span>Data Sub Kriteria</span></a>
        </li>
    @endif

    <li class="nav-item {{ $page === 'alternatif' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('indexDataAlternatif') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Alternatif</span></a>
    </li>

    <li class="nav-item {{ $page === 'penilaian' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('indexPenilaian') }}">
            <i class="fas fa-fw fa-edit"></i>
            <span>Data Penilaian</span></a>
    </li>

    <li class="nav-item {{ $page === 'perhitungan' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('indexPerhitungan') }}">
            <i class="fas fa-fw fa-calculator"></i>
            <span>Data Perhitungan</span></a>
    </li>

    <li class="nav-item {{ $page === 'hasil' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('indexHasil') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Hasil Akhir</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master User
    </div>

    <li class="nav-item {{ $page === 'user' ? 'active' : '' }}">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-users-cog"></i>
            <span>User</span>
        </a>
    </li>

    <li class="nav-item {{ $page === 'profile' ? 'active' : '' }}">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span>
        </a>
    </li>



    {{-- @if (Auth::user()->role == 'admin')
        <li class="nav-item {{ $page === 'user' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('indexUser') }}">
                <i class="fas fa-fw fa-users-cog"></i>
                <span>Data User</span></a>
        </li>
    @endif

    <li class="nav-item {{ $page === 'profile' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('indexProfile') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Profile</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>