<!-- resources/views/clients/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Liste des Clients</h2>
        <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">Ajouter un Client</a>
       
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Numéro de Téléphone</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($clients->isEmpty())
                <p>Aucun résultat trouvé pour votre recherche.</p>
                @endif
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->numtel }}</td>
                        <td>
                            <a href="{{ route('clients.show', $client->id) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
