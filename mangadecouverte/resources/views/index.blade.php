@extends('layouts.layout')

@section('titrePage')
    Liste des Mangas
@endsection

@section('titreItem')
    <h1> Tous les mangas : </h1>
@endsection

@section('contenu')
<table class="table table-sm table-striped">
    <thead class="table-dark">
        <th>Id</th>
        <th>Titre</th>
        <th>Prix</th>
        <th>Genre</th>
        <th>Nom Dessinateur</th>
        <th>Prénom Dessinateur</th>
    </thead>
    @foreach($mangas as $manga)
        <tr>
            <td> {{ $manga->id_manga }} </td>
            <td> {{ $manga->titre }} </td>
            <td> {{ $manga->prix }} </td>
            <td> {{ $manga->lib_genre }} </td>
            <td> {{ $manga->nom_dessinateur }} </td>
            <td> {{ $manga->prenom_dessinateur }} </td>
        </tr>
    @endforeach
</table>
@endsection