@extends('layouts.master',['menu'=>'1'])
@section('title', 'Acceuil') 
@section('content') 

    <!-- Debut Carousel -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('img/carousel-1.webp') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-75 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-0">Journ&eacute;e r&eacute;gionale de recrutement</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Ev&egrave;nement organis&eacute; le <B>01/12/2023</B> par la Direction R&eacute;ginale Casa/settat(OFPPT) pour promouvoir l'emploi dans le secteur T&eacute;rtiaire</p>
                                    <a href="/inscription" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">S'inscrire</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Lire plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('img/carousel-2.jpg') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-75 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">R&eacute;server des RDV pour les entretiens </h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Les laur&eacute;ats de l'OFPPT du secteur Tertiaires inscrits sur ce site, sont invit&eacute;s &agrave; r&eacute;server des RDVs pour passer les entretiens </p>
                                    <a href="/reservation" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">R&eacute;server</a>
                                    <a href="/invitation" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Imprimer invitation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Carousel -->

<?php
   $entreprises=App\Models\Entreprise::All();
?>
        <!-- Debut Entreprises participantes  -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <h1 class="text-center mb-5">Les entreprises participantes</h1>
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($entreprises as $entreprise)
                        <div class="testimonial-item bg-light rounded p-4">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p>{{$entreprise->raisonsociale}}</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('img/logos/'.$entreprise->logo) }}" style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">{{$entreprise->raisonabregee}}</h5>
                                    <A href="http://{{$entreprise->web}}"><small>{{$entreprise->web}}</small></A>
                                </div>
                            </div>
                        </div>
                    @endforeach
 <!--                   <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Office ch&eacute;rifien du phosphate</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('img/logos/logo1.svg') }}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">OCP</h5>
                                <small>www.ocpgroup.ma</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>L'Office de la Formation professionnele et de la prootion du travail</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('img/logos/logo2.png') }}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">OFPPT</h5>
                                <small>www.ofppt.ma</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Office National des Chemins de fer</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('img/logos/logo3.png') }}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">ONCF</h5>
                                <small>www.oncf.ma</small>
                            </div>
                        </div>
                    </div>

                     <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Banque Marocqine du Commerce Ext&eacute;rieur
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('img/logos/logo4.png') }}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">BMCE</h5>
                                <small>www.bmcebank.ma</small>
                            </div>
                        </div>
                    </div>
 -->
                </div>
            </div>
        </div>
        <!-- Fin entreprises participantes  -->
@endsection 

<!-- Aller en haut -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
