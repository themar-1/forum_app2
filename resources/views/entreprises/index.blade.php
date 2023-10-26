@extends('layouts.app')
@section('title', 'Stagiaire list')
@section('content')

    <div class="container">

        @if (count($entreprises))
            <ul>
                @foreach ($entreprises as $entreprise)
                    <li>
                        <a href="{{ route('entreprises.show', ['entreprise' => $entreprise->id]) }}">
                            id:{{ $entreprise->id }} | representant:{{ $entreprise->representant }} |
                            email:{{ $entreprise->email }} | stand:{{ $entreprise->stand }}
                        </a>
                    </li>
                @endforeach

            </ul>
        @endif
    </div>
@endsection
