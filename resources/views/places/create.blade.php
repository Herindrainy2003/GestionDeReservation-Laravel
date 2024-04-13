<!-- resources/views/places/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Créer une Place</h2>
        <form action="{{ route('places.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="place" class="form-label">Place:</label>
                <input type="number" id="place" name="place" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="occupation" class="form-label">Occupation:</label>
                <select id="occupation" name="occupation" class="form-select" required>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
