<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Voitures;
use App\Models\Client;
class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'idvoiture',
        'idclient',
        'place',
        'date_reservation',
        'date_voyage',
        'paiement',
        'montant_avance',
    ];

     // Relation avec la table Voiture
     public function voiture()
     {
         return $this->belongsTo(Voitures::class, 'idvoiture');
     }
 
     // Relation avec la table Client
     public function client()
     {
         return $this->belongsTo(Client::class, 'idclient');
     }
}
