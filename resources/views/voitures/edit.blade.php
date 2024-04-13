@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifier la Voiture</h2>
        <form action="{{ route('voitures.update', $voiture->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="design">Design :</label>
                <input type="text" class="form-control" id="design" name="design" value="{{ $voiture->design }}" required>
            </div>
            <div class="form-group">
                <label for="type">Type :</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="simple" @if($voiture->type == 'simple') selected @endif>Simple</option>
                    <option value="premium" @if($voiture->type == 'premium') selected @endif>Premium</option>
                    <option value="VIP" @if($voiture->type == 'VIP') selected @endif>VIP</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nbreplace">Nombre de Places :</label>
                <input type="number" class="form-control" id="nbreplace" name="nbreplace" value="{{ $voiture->nbreplace }}" required>
            </div>
            <div class="form-group">
                <label for="frais">Frais :</label>
                <input type="number" class="form-control" id="frais" name="frais" value="{{ $voiture->frais }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection

