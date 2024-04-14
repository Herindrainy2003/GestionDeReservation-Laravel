<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;
class Voitures extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'design',
        'type',
        'nbreplace',
        'frais',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'idvoiture');
    }

    public function clients()
    {
        return $this->hasManyThrough(Client::class, Reservation::class, 'idvoiture', 'id', 'idclient');
    }
}
