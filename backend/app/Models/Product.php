<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'nom',
        'prix',
        'image',
        'sport_id',
        'disponibilite',
    ];

    public $timestamps = false;

    protected $casts = [
        'prix' => 'decimal:2',
    ];

    // Un produit appartient à un sport
    public function sport()
    {
        return $this->belongsTo(Sport::class, 'id_sport');
    }
}
