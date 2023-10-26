@extends('layouts.app2')
@section('title', 'Stagiaire list')
@section('content')

    <div class="container">

        @if (count($stagiaires))
            <ul>
                @foreach ($stagiaires as $stagiaire)
                    <li>
                        <a href="{{ route('stagiaires.show', ['stagiaire' => $stagiaire['id']]) }}">
                            matricule:{{ $stagiaire['matricule'] }} | nom:{{ $stagiaire['nom'] }} |
                            prenom:{{ $stagiaire['prenom'] }}
                        </a>
                    </li>
                @endforeach

            </ul>
        @endif
    </div>
@endsection
