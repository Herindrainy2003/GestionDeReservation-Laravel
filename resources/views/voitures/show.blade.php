@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Details de la Voiture</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $voiture->design }}</h5>
                <p class="card-text">Type: {{ $voiture->type }}</p>
                <p class="card-text">Nombre de Places: {{ $voiture->nbreplace }}</p>
                <p class="card-text">Frais: {{ $voiture->frais }}</p>
                <a href="{{ route('voitures.edit', $voiture->id) }}" class="btn btn-primary">Modifier</a>
                <form action="{{ route('voitures.destroy', $voiture->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette voiture ?')">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
