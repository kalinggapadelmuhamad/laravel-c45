<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Dashboard
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">DB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ $halaman === 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link ha"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Master Data</li>
            <li class="nav-item dropdown {{ $halaman === 'users' ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="nav-link ha"><i
                        class="fas fa-users"></i><span>Users</span></a>

            </li>
            <li class="nav-item dropdown {{ $halaman === 'dataset' ? 'active' : '' }}">
                <a href="{{ route('dataset.index') }}" class="nav-link ha"><i
                        class="fas fa-database"></i><span>Dataset</span></a>

            </li>
            <li class="nav-item dropdown {{ $halaman === 'tree' ? 'active' : '' }}">
                <a href="{{ route('tree.index') }}" class="nav-link ha"><i class="fas fa-tree"></i><span>Pohon
                        Keputusan</span></a>

            </li>
            <li class="nav-item dropdown {{ $halaman === 'alternatif' ? 'active' : '' }}">
                <a href="{{ route('alternatif.index') }}" class="nav-link ha"><i
                        class="fas fa-list"></i><span>Alternatif</span></a>

            </li>
            <li class="nav-item dropdown {{ $halaman === 'penilaian' ? 'active' : '' }}">
                <a href="{{ route('penilaian.index') }}" class="nav-link ha"><i
                        class="fas fa-list-check"></i><span>Penilaian</span></a>

            </li>
            <li class="nav-item dropdown {{ $halaman === 'hasil' ? 'active' : '' }}">
                <a href="{{ route('hasil.index') }}" class="nav-link ha"><i
                        class="fas fa-file"></i><span>Hasil</span></a>

            </li>
            {{-- <li class="nav-item dropdown {{ $halaman === 'users' ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="nav-link ha"><i
                        class="fas fa-users"></i><span>Alternatif</span></a>

            </li>
            <li class="nav-item dropdown {{ $halaman === 'users' ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="nav-link ha"><i class="fas fa-users"></i><span>Penilaian
                    </span></a>

            </li> --}}
            {{-- <li class="nav-item dropdown {{ $type_menu === 'tempat' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-pin"></i><span>Tempat</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('tempat/kategori') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ route('kategori.index') }}"><i
                                class="fas  fa-layer-group"></i>Kategori</a>
                    </li>
                    <li class="{{ Request::is('tempat/lokasi') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('lokasi.index') }}"><i
                                class="fas fa-location-arrow"></i>Lokasi</a>
                    </li>
                    <li class="{{ Request::is('tempat/destinasi') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('destinasi.index') }}">
                            <i class="fas fa-map-location-dot"></i>Destinasi</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ $type_menu === 'like' ? 'active' : '' }}">
                <a href="{{ route('like.index') }}" class="nav-link ha"><i
                        class="fas fa-heart"></i><span>Likes</span></a>

            </li> --}}


        </ul>


    </aside>
</div>
