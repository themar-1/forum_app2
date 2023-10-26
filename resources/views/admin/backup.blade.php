@extends('layouts.app2')
@section('title', 'Stagiaires backup')
@section('content')

    <div class="container">
        @if (session()->has('success'))
            <div class="w-50 alert alert-success m-auto mt-5 mb-5"> {{ session('success') }}</div>
        @endif
        <form action="{{ route('admin.backup.importStagiaires') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <button type="submit">Import Stagiaiares</button>
        </form>
        <a href="{{ route('admin.backup.exportStagiaires') }}">Export Stagiaires</a>
        <hr class="my-5">
        <form action="{{ route('admin.backup.importEntreprises') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <button type="submit">Import Entreprises</button>
        </form>
        <a href="{{ route('admin.backup.exportEntreprises') }}">Export Entreprises</a>
        <hr class="my-5">
        <form action="{{ route('admin.backup.importEtablissements') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <button type="submit">Import Etablissements</button>
        </form>
        <a href="{{ route('admin.backup.exportEtablissements') }}">Export Etablissements</a>
    </div>
@endsection
