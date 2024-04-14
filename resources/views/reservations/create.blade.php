<!-- resources/views/reservations/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Créer une Réservation</h2>
        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="idvoiture" class="form-label">Voiture:</label>
                <select id="idvoiture" name="idvoiture" class="form-select" required>
                    @foreach ($voitures as $voiture)
                        <option value="{{ $voiture->id }}">{{ $voiture->design }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="idclient" class="form-label">Client:</label>
                <select id="idclient" name="idclient" class="form-select" required>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="place" class="form-label">Place:</label>
                <input type="number" id="place" name="place" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="date_reservation" class="form-label">Date Réservation:</label>
                <input type="date" id="date_reservation" name="date_reservation" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="date_voyage" class="form-label">Date Voyage:</label>
                <input type="date" id="date_voyage" name="date_voyage" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="paiement" class="form-label">Paiement:</label>
                <select id="paiement" name="paiement" class="form-select" required>
                    <option value="sans avance">Sans avance</option>
                    <option value="avec avance">Avec avance</option>
                    <option value="tout payé">Tout payé</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="destination" class="form-label">Destination:</label>
                <select id="destination" name="destination" class="form-select" required>
                    <option value="Tananarivo">Tananarivo</option>
                    <option value="Andranomafana">Andranomafana</option>
                    <option value="Antsirabe">Antsirabe</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="montant_avance" class="form-label">Montant Avance:</label>
                <input type="number" id="montant_avance" name="montant_avance" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
