<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dashboard</h2>
        <div class="row">
            <div class="col-md-6">
                <canvas id="reservationsByDestinationChart" width="400" height="400"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="reservationsByDesignChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Premier graphique : réservations par destination
        var ctx1 = document.getElementById('reservationsByDestinationChart').getContext('2d');
        var chart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: {!! json_encode($destinations) !!},
                datasets: [{
                    label: 'Réservations par destination',
                    data: {!! json_encode($counts) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Deuxième graphique : réservations par design de voiture
       // Deuxième graphique : clients par design de voiture
    
       
    </script>
   
        <!-- Tableau des clients par date -->
        <table class="table">
            <thead>
                <tr>
                    <th>Date de voyage</th>
                    <th>Client ID</th>
                    <th>Place</th>
                </tr>
            </thead>
            <tbody>
                 <!-- Tableau des clients par date -->
<div class="container">
    <h3 class="text-center">Clients par date de voyage</h3>
    @foreach ($clientsByDate->unique('date_voyage') as $date)
        <h4>{{ $date->date_voyage }}</h4>
       
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nom du client</th>
                    <th scope="col">Place</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientsByDate->where('date_voyage', $date->date_voyage) as $client)
                    <tr>
                        <td>{{ $client->client->nom }}</td>
                        <td>{{ $client->place }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endforeach
    <button class="btn btn-primary btn-sm" onclick="printClientsByDate('{{ $date->date_voyage }}')">Imprimer</button>
</div>

            </tbody>
        </table>
    <script>
        // Fonction pour imprimer la liste des clients par date
        function printClientsByDate(date) {
            window.print();
        }
    </script>
@endsection
