<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    protected $table = 'sports';

    protected $fillable = [
        'nom',
    ];

    public $timestamps = false;

    
    public function user()
    {
        return $this->hasMany(User::class, 'sport_id');
    }

}
