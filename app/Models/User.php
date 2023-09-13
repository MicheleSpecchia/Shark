<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\ReservationConfirmed;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'cognome',
        'email',
        'indirizzo',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function parks()
    {
        return $this->hasMany(Park::class, 'user_id');
    }

    public function parkReviews()
    {
        return $this->hasMany(ParkReview::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function confirmReservation(Request $request, $reservationId)
    {
        // Trova la prenotazione e confermala
        $reservation = Reservation::find($reservationId);
        $reservation->confirmed = true;
        $reservation->save();

        // Invia una notifica all'utente
        $user = $reservation->user;
        $user->notify(new ReservationConfirmed());

        // Altre operazioni
    }
}
