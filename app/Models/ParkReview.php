<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkReview extends Model
{
    use HasFactory;

    // Campi che possono essere assegnati in massa
    protected $fillable = [
        'title',
        'feedback',
        'rating',
        'user_id',
        'park_id'
    ];

    // Relazione con il modello User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relazione con il modello Park
    public function park()
    {
        return $this->belongsTo(Park::class);
    }
}
