@extends('layouts.app')
@section('title', 'Entreprise list')
@section('content')
    <div class="container">
        <a href="{{ route('entreprises.index') }}">back</a>
        @if ($entreprise)
            <li>
                id : {{ $entreprise->id }} | representant : {{ $entreprise->representant }} |
                email : {{ $entreprise->email }} | stand : {{ $entreprise->stand ?? 'undefined' }}
                <br>
        @endif
    </div>
@endsection
