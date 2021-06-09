@extends('layouts.layout')

@section('titrePage')
    Liste des collections
@endsection

@section('contenu')

<table class="table table-sm table-striped">
    <thead class="table-dark">
        <th>Id</th>
        <th>Titre</th>
        <th>Prix</th>
        <th></th>
    </thead>
    @foreach($collections as $collection)
        <tr>
            <td> {{ $collection->id }} </td>
            <td><strong> {{ $collection->titre }} </strong></td>
            <td> {{ $collection->prix }} </td>
            <td> 
                <a class="btn btn-primary" href="{{ route('collections.show', $collection->id) }}" role="voir">Voir</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection