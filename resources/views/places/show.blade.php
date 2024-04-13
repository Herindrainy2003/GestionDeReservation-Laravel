<!-- resources/views/places/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Détails de la Place</h2>
        <div class="card">
            <div class="card-body">
                <p class="card-text">ID: {{ $place->id }}</p>
                <p class="card-text">Place: {{ $place->place }}</p>
                <p class="card-text">Occupation: {{ $place->occupation }}</p>
            </div>
        </div>
    </div>
@endsection
