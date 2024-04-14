<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Voitures;


class dashboardController extends Controller
{
    public function index()
    {
        // Requête pour compter le nombre de réservations pour chaque destination
        $reservationsByDestination = Reservation::select('destination')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('destination')
            ->get();

          // Requête pour compter le nombre de réservations pour chaque design de voiture
          $reservationsByDesign = Voitures::select('design')
          ->withCount('reservations')
          ->get();
              

        // Convertir les résultats en tableau pour les utiliser dans le graphique
        $destinations = $reservationsByDestination->pluck('destination')->toArray();
        $counts = $reservationsByDestination->pluck('count')->toArray();

        // Requête pour récupérer les clients par date de voyage
        $clientsByDate = Reservation::select('date_voyage', 'idclient', 'place')
                                    ->orderBy('date_voyage')
                                    ->get();


        return view('dashboard', compact('destinations', 'counts' ,'clientsByDate'));
    }






}
