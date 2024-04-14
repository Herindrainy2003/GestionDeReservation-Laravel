<!-- receipt.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Reçu</title>
    <style>
        /* Ajoutez votre style CSS ici */
    </style>
</head>
<body>
  
    <h1>Reçu N°{{ $reservation->id }}</h1>
    <p>Date de réservation: {{ $reservation->date_reservation }}</p>
    <p>Date du voyage: {{ $reservation->date_voyage }}</p>
    <p>Nom du client: {{ $reservation->client->nom }}/Contact: {{ $reservation->client->numtel }}</p>
    <p>Voiture {{ $reservation->voiture->design }} Type de Voiture: {{ $reservation->voiture->type }}/Place: {{ $reservation->place }}</p>
    <p>Frais: {{ $reservation->voiture->frais }} Ar</p>
    <p>Paiement: {{ $reservation->paiement }}</p>
    <p>Montant Avance: {{ $reservation->montant_avance }} Ar/Reste: {{ ( $reservation->place * $reservation->voiture->frais ) - $reservation->montant_avance }} Ar</p>
</body>
</html>
