<!-- resources/views/clients/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifier le Client</h2>
        <form action="{{ route('clients.update', $client->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">Nom:</label>
                <input type="text" id="nom" name="nom" class="form-control" value="{{ $client->nom }}" required>
            </div>
            <div class="mb-3">
                <label for="numtel" class="form-label">Numéro de Téléphone:</label>
                <input type="text" id="numtel" name="numtel" class="form-control" value="{{ $client->numtel }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection
