<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
        <a href="index.blade.php" class="b-brand">
            <h4 class="nav__logo">Administration</h4>
            {{-- <img src="{{ asset('assets/images/logo.svg') }}" alt="" class="logo images"> --}}
            {{-- <img src="{{ asset('assets/images/logo-icon.svg') }}" alt="" class="logo-thumb images"> --}}
        </a>
    </div>
    <a class="mobile-menu" id="mobile-header" href="#!">
        <i class="feather icon-more-horizontal"></i>
    </a>
    <div class="collapse navbar-collapse">
        <a href="#!" class="mob-toggler"></a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <div class="main-search open">
                    <div class="input-group">
                        <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                        <a href="#" class="input-group-append search-close">
                            <i class="feather icon-x input-group-text"></i>
                        </a>

                        <span class="input-group-append search-btn btn btn-primary">
                            <i class="feather icon-search input-group-text"></i>
                        </span>
                    </div>
                </div>
            </li>
        </ul>

    </div>
</header>
