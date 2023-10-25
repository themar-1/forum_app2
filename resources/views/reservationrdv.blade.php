@extends('layouts.master', ['menu' => '32'])
@section('title', 'R&eacute;servation RDV')
@section('content')

    <!-- Debut resevation  -->
    <div class="container-xxl py-5 bg-dark page-header mb-5">
        <div class="container my-5 pt-5 pb-4">
            <h2 class="display-3 text-white mb-3 animated slideInDown">R&eacute;servation RDV</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="{{ route('acceuil') }}">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('acceuil') }}">Inscription</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">R&eacute;servation RDV</li>
                </ol>
            </nav>
        </div>
    </div>


    <!-- Debut recherche by cin et date naissance -->
    @if (Session::has('currentStagiaire'))
        @php
            $stagiaire = Session('currentStagiaire');
        @endphp
    @endif
    <div class="container-fluid bg-primary mb-2 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <div class="container">
            <form method="post" action="/getstagiairebycindatenaissancereservation">
                @csrf
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0" name="cin" placeholder="CIN ?"
                                    value="{{ isset($stagiaire) ? $stagiaire->cin : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0" name="datenaissance"
                                    placeholder="Date naissance ?"
                                    value="{{ isset($stagiaire) ? $stagiaire->datenaissance : '' }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-success border-0 w-100">Rechercher</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Fin recherche by cin et date naissance -->

    <!-- debut affichage du stagiaire et envoi de la reservation -->
    @isset($stagiaire)

        <div class="container-xxl ">
            <h4 class="text-center mb-2 wow fadeInUp" data-wow-delay="0.1s">Informations personnelles</h4>
            <div class="row mt-1 g-4">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <form action="/enregistrerinscription" method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf

                        <div class="row g-3">
                            <div class="row">
                                <div class="col-md-6 ps-md-5">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nom" readonly
                                            value="{{ $stagiaire->nom }}">
                                        <label for="nom">Nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6 pe-md-5">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="prenom" readonly
                                            value="{{ $stagiaire->prenom }}">
                                        <label for="prenom">Pr&eacute;nom</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ps-md-5">
                                    <div class="form-floating">
                                        <input class="form-control" name="cin" placeholder="Votre CIN ?" readonly
                                            value="{{ $stagiaire->cin }}">
                                        <label for="email">cin</label>
                                    </div>
                                </div>
                                <div class="col-md-6 pe-md-5">
                                    <div class="form-floating">
                                        <input class="form-control" name="datenaissance" readonly
                                            value="{{ $stagiaire->datenaissance }}">
                                        <label for="datenaissance">Date de naissance</label>
                                    </div>
                                </div>
                            </div>
                            @if ($stagiaire->status === 0)
                                <div class="row mt-3">
                                    <div class="col-4 offset"></div>
                                    <div class="bg-primary text-center col-5 pt-2 pb-2 ps-5 pe-5">
                                        <span> <b>Vous n'&ecirc;tes pas encore inscrit(e) </b> </span>
                                        <A class="btn btn-primary py-3" href="/inscription">Aller sur page inscription</A>
                                    </div>
                                    <div class="col-3 offset"> </div>
                                </div>
                            @else
                                <div class="row mt-3">
                                    <div class="col-3 offset"></div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <span> <b>Vous avez d&eacute;ja des Rendez-vous enregistr&eacute;es </b> </span>
                                            <A class="btn btn-success" href="/annulereservation/{{ $stagiaire->cin }}">Annuler
                                                les RDV</A>
                                        </div>
                                    </div>
                                    <div class="col-3 offset"></div>
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @else
        <div class="row mt-3">
            <div class="col-3 offset"></div>
            <div class="bg-primary text-center col-6 ps-5 pe-5">
                <H6> {{ __('Les informations entrees incorrectes ou (re)commencez la recherche ') }} </H6>
            </div>
            <div class="col-3 offset"> </div>
        </div>

    @endisset

    <!-- fin affichage du stagiaire et envoi de la resevation -->



    <!-- Fin resevation  -->

@endsection

<!-- Aller en haut -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
