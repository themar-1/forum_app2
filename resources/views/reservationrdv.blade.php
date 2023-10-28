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

    @isset($stagiaire)
    <?php
    $entreprises = App\Models\Entreprise::all();
    $hasParticipatingCompanies = false; 
    ?>
    
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            @if ($entreprises->count() > 0)
                <h1 class="text-center mb-5">Les Entreprises Participantes</h1>
    
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
    
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
    
                <div class="d-flex flex-row justify-content-between flex-wrap">
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($entreprises as $entreprise)
                            @if ($entreprise->status === 0)
                                <div class="testimonial-item bg-light rounded p-4">
                                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                    <p>{{$entreprise->raisonsociale}}</p>
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('img/logos/'.$entreprise->logo) }}" style="width: 50px; height: 50px;">
                                        <div class="ps-3">
                                            <h5 class="mb-1">{{$entreprise->raisonabregee}}</h5>
                                            <a href="http://{{$entreprise->web}}"><small>{{$entreprise->web}}</small></a>
                                            <div class="d-flex justify-content-end">
                                                <form method="POST" action="{{ route('apply-for-interview', ['entrepriseId' => $entreprise->id]) }}">
                                                    @csrf
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Postuler</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $hasParticipatingCompanies = true; ?>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
            @if (!$hasParticipatingCompanies)
                <h1 class="text-center mb-5">Pas d'entreprises participantes</h1>
            @endif
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
