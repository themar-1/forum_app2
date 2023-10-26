@extends('layouts.app2')
@section('title', 'Stagiaire list')
@section('content')
    <div class="container">
        <a href="{{ route('stagiaires.index') }}">back</a>
        @if ($stagiaire)
            <li>matricule:{{ $stagiaire->matricule }} | nom:{{ $stagiaire->nom }} |
                prenom:{{ $stagiaire->prenom }} | status:{{ $stagiaire->status }} | cv:{{ $stagiaire->cv }} </li>
            <br>
            <form action="{{ route('downloadCV') }}" method="POST">
                @csrf
                <input type="hidden" name="fileName" value={{ $stagiaire->cv }}>
                <button class="btn btn-info text-white">Download CV</button>
            </form>
            <br>
            <form action="{{ route('viewCV') }}" method="POST">
                @csrf
                <input type="hidden" name="fileName" value={{ $stagiaire->cv }}>
                <button class="btn btn-info text-white">View CV</button>
            </form>
            {{-- {{ dd(storage_path('app/resource' . $stagiaire->cv)) }} --}}
            <iframe src="{{ storage_path('app/resumes/' . $stagiaire->cv) }}" frameborder="0"></iframe>
            <iframe src=""></iframe>
        @endif
    </div>
@endsection
