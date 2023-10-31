@extends('layouts.app2')
@section('title', 'Dashboard')
@section('content')


    <div class=" row d-flex justify-content-center align-items-center h-100">
        <div class=" col col-lg-9 w-100 col-xl-7">
            <div class="shadow-lg card">
                <div class="rounded-top text-white d-flex flex-row" style="background-image: url('https://thumb.photo-ac.com/eb/eb4d9c8c85e462a4d8115eb9d50d2cd3_t.jpeg'); height:200px;">
                    <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                        <img src="{{ asset('img/logos/' . $logo) }}"
                            alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                            style="width: 150px; z-index: 1">
                    </div>
                    <div class="ms-3" style="margin-top: 130px;">
                        <h3 style="color: #f8f9fa">{{ $entrepriseName }}</h3>
                        <p>wa7de 9nt</p>
                    </div>
                </div>
                <div class="p-4 text-black" style="background-color: #f8f9fa;">
                    {{-- <div class="d-flex justify-content-end text-center py-1">
                                <div>
                                    <p class="mb-1 h5">253</p>
                                    <p class="small text-muted mb-0">Photos</p>
                                </div>
                                <div class="px-3">
                                    <p class="mb-1 h5">1026</p>
                                    <p class="small text-muted mb-0">Followers</p>
                                </div>
                                <div>
                                    <p class="mb-1 h5">478</p>
                                    <p class="small text-muted mb-0">Following</p>
                                </div>
                            </div> --}}
                </div>
                <div class="card-body w-100 m-auto p-4 text-black">

                    <table class="table table-hover m-b-0">
                        <thead>
                            <tr>


                                <th><span>Matricule</span></th>
                                <th><span>Nom Complet</span></th>
                                <th><span>Sexe</span></th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($appliedCandidates as $application)
                                    <td>
                                        {{ $application->stagiaire->prenom }} </td>
                                    <td>{{ $application->stagiaire->nom }}</td>
                                    <td>
                                        <form action="{{ route('showCVs') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="fileName" value="{{ $application->stagiaire->cv }}">
                                            <button class="view-cv btn btn-info"><i class="fas fa-eye"></i> View CV</button>

                                        </form>
                                    </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    @endsection