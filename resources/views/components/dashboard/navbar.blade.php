<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
    <div class="container-fluid">
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                        <img src="/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            <div class="user-box">
                                <div class="avatar-lg"><img src="/assets/img/profile.jpg" alt="image profile"
                                        class="avatar-img rounded"></div>
                                <div class="u-text">

                                    <h4>{{ auth()->guard('petugas')->user()->nama_15458 }}</h4>
                                    <p class="text-muted">{{ auth()->guard('petugas')->user()->username_15458 }}</p><a
                                        href="#">
                                </div>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="post" class="dropdown-item">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm w-100 border-0">Logout</button>
                            </form>
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>
