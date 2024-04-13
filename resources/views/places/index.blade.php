<!-- resources/views/places/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Liste des Places</h2>
        <a href="{{ route('places.create') }}" class="btn btn-primary mb-3">Créer une Place</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Place</th>
                    <th scope="col">Occupation</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($places as $place)
                    <tr>
                        <td>{{ $place->id }}</td>
                        <td>{{ $place->place }}</td>
                        <td>{{ $place->occupation }}</td>
                        <td>
                            <a href="{{ route('places.show', $place->id) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('places.edit', $place->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <form action="{{ route('places.destroy', $place->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette place ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
