<nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
    <div class="navbar-wrapper ">
        <div class="navbar-brand header-logo">
            <a href="index.blade.php" class="b-brand">
                <img src="{{asset('assets/images/logo.svg')}}" alt="" class="logo images">
                <img src="{{asset('assets/images/logo-icon.svg')}}" alt="" class="logo-thumb images">
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Space</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Ajouter</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ route('admin.ajouter.ajouter_A')}}" class="">Ajouter Admin</a></li>
                        <li class=""><a href="{{ route('admin.ajouter.ajouter_E')}}" class="">Ajouter Entreprise</a></li>
                        <li class=""><a href="{{ route('admin.ajouter.ajouter_S')}}" class="">Ajouter Étudiant</a></li>
                        
                    </ul>
                </li>
              
                <li class="nav-item pcoded-menu-caption cursor-pointer">
                    <label>Action</label>
                </li>
                
                <li  class="nav-item cursor-pointer"><a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power">
                </i></span><span class="pcoded-mtext">Logut</span></a></li>
                   
                <form id="frm-logout" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf 
                </form>
                </ul>
            
        </div>
    </div>
</nav>