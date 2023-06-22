<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'address', 'cap', 'location', 'civico','foto','description'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['cap'] ?? false) {
            $query->where('cap', 'like', '%' . request('cap') . '%');
        }

        if ($filters['search'] ?? false) {
            $query
            ->where('address', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('cap', 'like', '%' . request('search') . '%')
            ->orWhere('location', 'like', '%' . request('search') . '%');
        }
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
