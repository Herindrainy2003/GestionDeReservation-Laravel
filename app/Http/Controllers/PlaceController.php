<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Voitures;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::all();
        return view('places.index', compact('places'));
    }

    public function create()
    {
        $voitures = Voitures::all();
        return view('places.create' , compact('voitures'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'idvoiture' => 'required | exists:voitures,id',
            'place' => 'required|integer',
            'occupation' => 'required|in:oui,non',
        ]);

        Place::create($request->all());
        return redirect()->route('places.index')
            ->with('success', 'Place created successfully.');
    }

    public function show(Place $place)
    {
        return view('places.show', compact('place'));
    }

    public function edit(Place $place)
    {
        return view('places.edit', compact('place'));
    }

    public function update(Request $request, Place $place)
    {
        $request->validate([
            'place' => 'required|integer',
            'occupation' => 'required|in:oui,non',
        ]);

        $place->update($request->all());
        return redirect()->route('places.index')
            ->with('success', 'Place updated successfully');
    }

    public function destroy(Place $place)
    {
        $place->delete();
        return redirect()->route('places.index')
            ->with('success', 'Place deleted successfully');
    }
}
