<!-- resources/views/reservations/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifier la Réservation</h2>
        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="idvoiture" class="form-label">Voiture:</label>
                <select id="idvoiture" name="idvoiture" class="form-select" required>
                    @foreach ($voitures as $voiture)
                        <option value="{{ $voiture->id }}" {{ $reservation->idvoiture == $voiture->id ? 'selected' : '' }}>{{ $voiture->design }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="idclient" class="form-label">Client:</label>
                <select id="idclient" name="idclient" class="form-select" required>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}" {{ $reservation->idclient == $client->id ? 'selected' : '' }}>{{ $client->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="place" class="form-label">Place:</label>
                <input type="number" id="place" name="place" class="form-control" value="{{ $reservation->place }}" required>
            </div>
            <div class="mb-3">
                <label for="date_reservation" class="form-label">Date Réservation:</label>
                <input type="date" id="date_reservation" name="date_reservation" class="form-control" value="{{ $reservation->date_reservation }}" required>
            </div>
            <div class="mb-3">
                <label for="date_voyage" class="form-label">Date Voyage:</label>
                <input type="date" id="date_voyage" name="date_voyage" class="form-control" value="{{ $reservation->date_voyage }}" required>
            </div>
            <div class="mb-3">
                <label for="paiement" class="form-label">Paiement:</label>
                <select id="paiement" name="paiement" class="form-select" required>
                    <option value="sans avance" {{ $reservation->paiement == 'sans avance' ? 'selected' : '' }}>Sans avance</option>
                    <option value="avec avance" {{ $reservation->paiement == 'avec avance' ? 'selected' : '' }}>Avec avance</option>
                    <option value="tout payé" {{ $reservation->paiement == 'tout payé' ? 'selected' : '' }}>Tout payé</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="montant_avance" class="form-label">Montant Avance:</label>
                <input type="number" id="montant_avance" name="montant_avance" class="form-control" value="{{ $reservation->montant_avance }}">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection
