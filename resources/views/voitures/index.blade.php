@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Liste des Voitures</h2>
        <a href="{{ route('voitures.create') }}" class="btn btn-primary mb-3">Ajouter une voiture</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Design</th>
                    <th>Type</th>
                    <th>Nombre de Places</th>
                    <th>Frais</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($voitures as $voiture)
                    <tr>
                        <td>{{ $voiture->design }}</td>
                        <td>{{ $voiture->type }}</td>
                        <td>{{ $voiture->nbreplace }}</td>
                        <td>{{ $voiture->frais }}</td>
                        <td>
                            <a href="{{ route('voitures.edit', $voiture->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <form action="{{ route('voitures.destroy', $voiture->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette voiture ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
