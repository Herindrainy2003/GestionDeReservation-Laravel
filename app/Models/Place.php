<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Voitures;

class Place extends Model
{
    use HasFactory;
    protected $fillable = [
        'idvoiture',
        'place',
        'occupation',
        
    ];

     // Relation avec la table Voiture
     public function voiture()
     {
         return $this->belongsTo(Voitures::class, 'idvoiture');
     }
}
