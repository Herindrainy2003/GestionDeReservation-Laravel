<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voitures extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'design',
        'type',
        'nbreplace',
        'frais',
    ];
}