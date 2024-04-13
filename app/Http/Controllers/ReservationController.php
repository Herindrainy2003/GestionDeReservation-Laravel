<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Voitures;
use App\Models\Client;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        $voitures = Voitures::all();
        $clients = Client::all();
        return view('reservations.create', compact('voitures' , 'clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'idvoiture' => 'required|exists:voitures,id',
            'idclient' => 'required|exists:clients,id',
            'place' => 'required|integer',
            'date_reservation' => 'required|date',
            'date_voyage' => 'required|date',
            'paiement' => 'required|in:sans avance,avec avance,tout payé',
            'montant_avance' => 'nullable|integer',
        ]);

        Reservation::create($request->all());
        return redirect()->route('reservations.index')
            ->with('success', 'Reservation created successfully.');
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
      
        $voitures = Voitures::all();
        $clients = Client::all();
        return view('reservations.edit', compact('reservation' , 'voitures' , 'clients'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'idvoiture' => 'required|exists:voitures,id',
            'idclient' => 'required|exists:clients,id',
            'place' => 'required|integer',
            'date_reservation' => 'required|date',
            'date_voyage' => 'required|date',
            'paiement' => 'required|in:sans avance,avec avance,tout payé',
            'montant_avance' => 'nullable|integer',
        ]);

        $reservation->update($request->all());
        return redirect()->route('reservations.index')
            ->with('success', 'Reservation updated successfully');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index')
            ->with('success', 'Reservation deleted successfully');
    }
}
