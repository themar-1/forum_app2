@extends("layouts.master",['menu'=>'2']) 
@section('title', 'Objectifs') 
@section('content') 

      <!-- Debut Header -->
      <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Objectifs</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="{{route('acceuil')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Objectifs</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Fin Header -->
        <!-- debut objectifs -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="{{ asset('img/about-1.webp') }}"  >
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="{{ asset('img/about-2.webp') }}" >
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="{{ asset('img/about-3.webp') }}" >
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="{{ asset('img/about-4.webp') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Nous vous aiderons &agrave; trouver un job qui r&eacute;pond &agrave; vos attentes</h1>
                        <p class="mb-4">Dans le but de satisfaire les besoins du marché de l'emploi dans le secteur tertiaire, La Direction R&eacute;gionale Casa/Settat de l'OFPPT organise une journ&eacute;e de recrutment pour  missions stratégiques  :</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Favoriser l'employabilit&eacute; des jeunes</p>
                        <p><i class="fa fa-check text-primary me-3"></i>R&eacute;pondre aux besoins des entreprises en termes de comp&eacute;tences qualifi&eacute;es</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Evaluer la qualit&eacute; des laur&eacute; par les professionnels </p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Lire plus</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin objectifs-->

@endsection 

     <!-- Aller en haut -->
     <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

