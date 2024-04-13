<!-- resources/views/places/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div>
        <h2>Modifier la Place</h2>
        <form action="{{ route('places.update', $place->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="place">Place:</label>
                <input type="number" id="place" name="place" value="{{ $place->place }}" required>
            </div>
            <div>
                <label for="occupation">Occupation:</label>
                <select id="occupation" name="occupation" required>
                    <option value="oui" @if ($place->occupation == 'oui') selected @endif>Oui</option>
                    <option value="non" @if ($place->occupation == 'non') selected @endif>Non</option>
                </select>
            </div>
            <button type="submit">Modifier</button>
        </form>
    </div>
@endsection
