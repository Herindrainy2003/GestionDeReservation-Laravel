@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter une Voiture</h2>
        <form action="{{ route('voitures.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="design">Design :</label>
                <input type="text" class="form-control" id="design" name="design" required>
            </div>
            <div class="form-group">
                <label for="type">Type :</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="simple">Simple</option>
                    <option value="premium">Premium</option>
                    <option value="VIP">VIP</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nbreplace">Nombre de Places :</label>
                <input type="number" class="form-control" id="nbreplace" name="nbreplace" required>
            </div>
            <div class="form-group">
                <label for="frais">Frais :</label>
                <input type="number" class="form-control" id="frais" name="frais" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
