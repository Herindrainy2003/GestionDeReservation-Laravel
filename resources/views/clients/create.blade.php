<!-- resources/views/clients/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter un Client</h2>
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom:</label>
                <input type="text" id="nom" name="nom" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="numtel" class="form-label">Numéro de Téléphone:</label>
                <input type="text" id="numtel" name="numtel" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
