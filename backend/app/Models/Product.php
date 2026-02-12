<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prix',
        'image',
        'sport_id',
        'disponibilite',
    ];

    // Un produit appartient à un sport
    public function sport()
    {
        return $this->belongsTo(Sport::class, 'sport_id');
    }
}
