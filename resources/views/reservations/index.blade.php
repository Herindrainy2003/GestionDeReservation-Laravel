<!-- resources/views/reservations/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Liste des Réservations</h2>
        <a href="{{ route('reservations.create') }}" class="btn btn-primary mb-3">Créer une Réservation</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Voiture</th>
                    <th scope="col">Client</th>
                    <th scope="col">Place</th>
                    <th scope="col">Date Réservation</th>
                    <th scope="col">Date Voyage</th>
                    <th scope="col">Paiement</th>
                    <th scope="col">Montant Avance</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->voiture->design }}</td>
                        <td>{{ $reservation->client->nom }}</td>
                        <td>{{ $reservation->place }}</td>
                        <td>{{ $reservation->date_reservation }}</td>
                        <td>{{ $reservation->date_voyage }}</td>
                        <td>{{ $reservation->paiement }}</td>
                        <td>{{ $reservation->montant_avance }}</td>
                        <td>
                            <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
