<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voitures;

class VoituresController extends Controller
{
    public function index()
    {
        $voitures = Voitures::all();
        return view('voitures.index', compact('voitures'));
    }

    public function create()
    {
        return view('voitures.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'design' => 'required',
            'type' => 'required',
            'nbreplace' => 'required|integer',
            'frais' => 'required|integer',
        ]);

        Voitures::create($request->all());
        
        return redirect()->route('voitures.index')
                         ->with('success', 'Voiture créée avec succès.');
    }

    public function edit(Voiture $voiture)
    {
        return view('voitures.edit', compact('voiture'));
    }

    public function update(Request $request, Voiture $voiture)
    {
        $request->validate([
            'design' => 'required',
            'type' => 'required',
            'nbreplace' => 'required|integer',
            'frais' => 'required|integer',
        ]);

        $voiture->update($request->all());

        return redirect()->route('voitures.index')
                         ->with('success', 'Voiture mise à jour avec succès.');
    }

    public function destroy(Voiture $voiture)
    {
        $voiture->delete();

        return redirect()->route('voitures.index')
                         ->with('success', 'Voiture supprimée avec succès.');
    }
}
