@extends('layouts.master', ['menu' => '0'])
@section('title', 'Connexion')
@section('content')



    <!-- debut Login -->


    <div class="container">
        <div class="row justify-content-center">
            <section class="vh-100">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-xl-10">
                            <div class="card" style="border-radius: 1rem;">
                                <div class="row g-0">
                                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                                        {{-- <img src="{{ asset('assets/images/slider/img-slide-1.jpg') }}" alt="login form" --}}
                                        <img src="{{ asset('assets/images/auth-bg2.jpg') }}" alt="login form"
                                            class="img-fluid" style="border-radius: 1rem 0 0 1rem;height :100%" />
                                    </div>
                                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                        <div class="card-body p-4 p-lg-5 text-black">

                                            <form method="POST" action="{{ route('login.action') }}">
                                                @csrf
                                                <div class="d-flex align-items-center mb-3 pb-1">
                                                    <i class="fas fa-building fa-2x me-3" style="color: #00B074;"></i>
                                                    <span class="h2 fw-bold mb-0">Réservée aux entreprises</span>
                                                </div>

                                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Connectez-vous
                                                    à votre compte</h5>

                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="form2Example17">Adresse e-mail</label>
                                                    <input type="email" id="form2Example17" placeholder="Adresse e-mail"
                                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email" autofocus />
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="form2Example27">Mot de passe</label>
                                                    <input type="password" id="form2Example27" placeholder="Mot de passe"
                                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                        name="password" required />
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>

                                                <div class="pt-1 mb-4">
                                                    <button class="btn btn-success btn-lg btn-block" type="submit">Se
                                                        connecter</button>
                                                </div>
                                            </form>
                                            <a class="small text-muted" href="{{ route('password.request') }}">Mot de passe
                                                oublié ?</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
    <!-- fin Login  -->

@endsection
