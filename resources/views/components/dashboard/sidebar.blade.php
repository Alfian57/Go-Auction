<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ auth()->guard('petugas')->user()->nama_15458 }}
                            <span
                                class="user-level text-capitalize">{{ auth()->guard('petugas')->user()->level->nama_15458 }}</span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item @if (Request::is('dashboard')) active @endif">
                    <a href="{{ route('dashboard') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <h4 class="text-section">Data Pengguna</h4>
                </li>
                <li class="nav-item @if (Request::is('masyarakat*')) active @endif">
                    <a href="{{ route('masyarakat.index') }}">
                        <img src="/assets/img/masyarakat.png" alt="Masyarakat Icon" class="img-fluid icon">
                        <p class="px-3">Data Masyarakat</p>
                    </a>
                </li>
                <li class="nav-item @if (Request::is('petugas*')) active @endif">
                    <a href="{{ route('petugas.index') }}">
                        <img src="/assets/img/petugas.png" alt="Petugas Icon" class="img-fluid icon">
                        <p class="px-3">Data Petugas</p>
                    </a>
                </li>

                <li class="nav-section">
                    <h4 class="text-section">Data Sistem</h4>
                </li>
                @if (auth()->guard('petugas')->user()->level->nama_15458 == 'petugas')
                    <li class="nav-item @if (Request::is('lelang*')) active @endif">
                        <a href="{{ route('lelang.index') }}">
                            <img src="/assets/img/lelang.png" alt="Lelang Icon" class="img-fluid icon">
                            <p class="px-3">Data Lelang</p>
                        </a>
                    </li>
                @endif
                <li class="nav-item @if (Request::is('barang*')) active @endif">
                    <a href="{{ route('barang.index') }}">
                        <img src="/assets/img/barang.png" alt="Petugas Icon" class="img-fluid icon">
                        <p class="px-3">Data Barang</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
