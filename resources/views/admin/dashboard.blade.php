@extends('layouts.app2')
@section('title', 'Dashboard')
@section('content')
    <div class="container">

        <h1>Hello admin!</h1>
        {{ Auth::user()->name }}
        <br>
        <ul>
            <li><a href="{{ route('stagiaires.index') }}">Stagiaire List</a></li>
            <li><a href="{{ route('entreprises.index') }}">Entreprise List</a></li>
            @if (Auth::user()->hasRole(1))
                <li><a href="{{ route('admin.backup.index') }}">Backup</a></li>
            @endif
        </ul>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button class="btn btn-success">logout</button>
        </form>
    </div>
@endsection
