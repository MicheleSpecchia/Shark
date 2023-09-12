<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'address', 'cap', 'location', 'description', 'stars', 'price', 'automobili', 'motocicli', 'camper'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function images()
    {
        return $this->hasMany(ParkImage::class);
    }

    public function parkReviews()
    {
        return $this->hasMany(ParkReview::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
