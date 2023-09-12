<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    protected $fillable = [
        'user_id',
        'park_id',
        'data_inizio',
        'data_fine',
        'start_time',
        'end_time',
        'price',
        'veicolo',
    ];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function park()
    {
        return $this->belongsTo(Park::class);
    }

    public function review()
    {
        return $this->hasOne(ParkReview::class, 'reservation_id');
    }
    
}
