@extends("layouts.master",['menu'=>'32']) 
@section('title', 'Inscription') 
@section('content') 

        <!-- Debut resevation  -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h2 class="display-3 text-white mb-3 animated slideInDown">R&eacute;servation RDV</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="{{route('acceuil')}}">Acceuil</a></li>
                        <li class="breadcrumb-item"><a href="{{route('acceuil')}}">Inscription</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">R&eacute;servation RDV</li>
                    </ol>
                </nav>
            </div>
        </div>
        
      <!-- Fin resevation  -->

      <BR><BR><BR><BR>
        @endsection 

<!-- Aller en haut -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

   