<!-- resources/views/clients/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Détails du Client</h2>
        <div class="card">
            <div class="card-body">
                <p class="card-text">ID: {{ $client->id }}</p>
                <p class="card-text">Nom: {{ $client->nom }}</p>
                <p class="card-text">Numéro de Téléphone: {{ $client->numtel }}</p>
            </div>
        </div>
    </div>
@endsection
