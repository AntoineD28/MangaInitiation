@extends('layouts.layout')

@section('titrePage')
    Liste des Mangas
@endsection

@section('titreItem')
    <h1> Tous les mangas : </h1>
@endsection

@section('contenu')

    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif

<table class="table table-sm table-striped">
    <thead class="table-dark">
        <th>Id</th>
        <th>Titre</th>
        <th>Genre</th>
        <th></th>
        <th></th>
    </thead>
    @foreach($mangas as $manga)
        <tr>
            <td> {{ $manga->id }} </td>
            <td><strong> {{ $manga->titre }} </strong></td>
            <td> {{ $manga->genre->lib_genre }} </td>
            <td> 
                <a class="btn btn-primary" href="{{ route('mangas.show', $manga->id) }}" role="voir">Voir</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection