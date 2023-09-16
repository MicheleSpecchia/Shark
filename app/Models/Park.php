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
    // Nel modello Park.php

    public function getAverageRatingAttribute()
    {
        return $this->parkReviews->avg('rating');
    }

    public function getReviewsCountAttribute()
    {
        return $this->parkReviews->count();
    }


    public function parkReviews()
    {
        return $this->hasMany(ParkReview::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function reviews()
    {
        return $this->hasMany(ParkReview::class);
    }
}
