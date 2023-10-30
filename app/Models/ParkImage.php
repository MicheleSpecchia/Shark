<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'park_id',
        'image_path'
    ];

    public function park()
    {
        return $this->belongsTo(Park::class);
    }
    
}
