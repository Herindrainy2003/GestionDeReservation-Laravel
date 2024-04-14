<!-- resources/views/reservations/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Détails de la Réservation</h2>
        <div class="card">
            <div class="card-body">
                <p class="card-text">ID: {{ $reservation->id }}</p>
                <p class="card-text">Voiture: {{ $reservation->voiture->design }}</p>
                <p class="card-text">Client: {{ $reservation->client->nom }}</p>
                <p class="card-text">Place: {{ $reservation->place }}</p>
                <p class="card-text">Date Réservation: {{ $reservation->date_reservation }}</p>
                <p class="card-text">Date Voyage: {{ $reservation->date_voyage }}</p>
                <p class="card-text">Paiement: {{ $reservation->paiement }}</p>
                <p class="card-text">Montant Avance: {{ $reservation->montant_avance }}</p>
            </div>
            <button class="btn btn-primary btn-sm" onclick="printClientsByDate()">Imprimer</button>
        </div>
    </div>
@endsection


