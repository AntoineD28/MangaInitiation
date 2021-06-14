@extends('layouts.layout')

@section('contenu')
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Ajouter un manga</h4>
            <div class="card-body">
                <form action="{{ route('mangas.store') }}" method="POST">
                    @csrf
                    <br>
                    <div class="form-group">
                        <input type="text" class="form-control @error('nomDessinateur') is-invalid @enderror" name="nomDessinateur" id="nomDessinateur" placeholder="Nom du dessinateur">
                        @error('nomDessinateur')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <input type="text" class="form-control @error('nomDessinateur') is-invalid @enderror" name="nomDessinateur" id="nomDessinateur" placeholder="Nom du dessinateur">
                        @error('nomDessinateur')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <input type="text" class="form-control @error('nomDessinateur') is-invalid @enderror" name="nomDessinateur" id="nomDessinateur" placeholder="Nom du dessinateur">
                        @error('nomDessinateur')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <input type="text" class="form-control @error('nomDessinateur') is-invalid @enderror" name="nomDessinateur" id="nomDessinateur" placeholder="Nom du dessinateur">
                        @error('nomDessinateur')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <input type="text" class="form-control @error('nomDessinateur') is-invalid @enderror" name="nomDessinateur" id="nomDessinateur" placeholder="Nom du dessinateur">
                        @error('nomDessinateur')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <input type="text" class="form-control @error('nomDessinateur') is-invalid @enderror" name="nomDessinateur" id="nomDessinateur" placeholder="Nom du dessinateur">
                        @error('nomDessinateur')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
@endsection