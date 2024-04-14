<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class searchController extends Controller
{
    public function search(Request $request)
    {
        // Récupérer la requête de recherche de l'utilisateur depuis le champ de saisie
        $query = $request->input('query');

        // Effectuer la recherche dans votre modèle avec la requête de recherche
        $clients = Client::where('nom', 'like', '%' . $query . '%')->get();
        // Remplacez 'column_name' par le nom de la colonne sur laquelle vous souhaitez effectuer la recherche

        // Passer les résultats à la vue
        return view('search_results', compact('clients'));
        // Assurez-vous de créer une vue 'search_results.blade.php' pour afficher les résultats
    }
}
