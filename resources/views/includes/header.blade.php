    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('acceuil') }}" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
            <h4 class="m-0 text-primary">Salon R&eacute;gional de recrutement</h4>
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('acceuil') }}"
                    class="nav-item nav-link  @if ($menu === '1') active @endif">Acceuil</a>
                <a href="{{ route('about') }}"
                    class="nav-item nav-link @if ($menu === '2') active @endif">Objectifs</a>
                <div class="nav-item  @if ($menu === '31') active @endif dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Inscription</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ route('inscription') }}" class="dropdown-item">S'inscrire</a>
                        <a href="{{ route('reservationrdv') }}" class="dropdown-item">Prise de RDV</a>
                        <a href="{{ route('invitation') }}" class="dropdown-item">Imprimer invitation</a>
                    </div>
                </div>

                <a href="{{ route('contact') }}"
                    class="nav-item nav-link @if ($menu === '4') active @endif">Contact</a>
            </div>
            @if ($menu !== '0')
                <a href="{{ route('login') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Se
                    connecter<i class="fa fa-arrow-right ms-3"></i></a>
            @endif
        </div>
    </nav>
    <!-- Navbar End -->
