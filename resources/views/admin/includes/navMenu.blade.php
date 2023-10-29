<nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
    <div class="navbar-wrapper ">
        <div class="navbar-brand header-logo">
            <a href="{{ route('admin.dashboard') }}" style="text-decoration: none;" class="b-brand">
                <h4 class="nav__logo">Administration</h4>
                {{-- <img src="{{ asset('assets/images/logo.svg') }}" alt="" class="logo images"> --}}
                {{-- <img src="{{ asset('assets/images/logo-icon.svg') }}" alt="" class="logo-thumb images"> --}}
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>action</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a class="nav-link cursor-pointer"><span class="pcoded-micon"><i
                                class="feather icon-box"></i></span><span class="pcoded-mtext">Ajouter</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ route('admin.ajouter.ajouter_A') }}" class="">Ajouter
                                Admin</a></li>
                        <li class=""><a href="{{ route('admin.ajouter.ajouter_E') }}" class="">Ajouter
                                Entreprise</a></li>
                        <li class=""><a href="{{ route('admin.ajouter.ajouter_S') }}" class="">Ajouter
                                Stagiaires</a></li>

                    </ul>
                </li>

                <li class="nav-item pcoded-menu-caption cursor-pointer">
                </li>
                <div>
                    <li class="nav-item bg-danger">
                        <a class="nav-link text-white " style="cursor: pointer">
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button class="py-1" style="all:unset">
                                    <span class="pcoded-micon">
                                        <i class="feather icon-power"></i>
                                    </span>
                                    <span class="pcoded-mtext">Logout</span>
                                </button>
                            </form>
                        </a>
                    </li>
                </div>

            </ul>

        </div>
    </div>
</nav>
