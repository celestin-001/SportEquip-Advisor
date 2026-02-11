<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table = 'utilisateurs';

    protected $fillable = [
        'fullname',
        'age',
        'poids',
        'taille',
        'niveau',
        'id_sport',
    ];

    public $timestamps = false;

    // Un utilisateur appartient à un sport
    public function sport()
    {
        return $this->belongsTo(Sport::class, 'id_sport');
    }
}
