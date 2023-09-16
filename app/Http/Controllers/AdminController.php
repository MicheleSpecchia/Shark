<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Park;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reservations_count = [];
        $cumulative_users_count = [];
        $parks_daily_count = [];
        $totalUsers = 0;

        for ($i = 6; $i >= 0; $i--) {
            $day = Carbon::now()->subDays($i);

            // Prenotazioni
            $reservationCount = Reservation::whereDate('created_at', $day)->count();
            $reservations_count[] = $reservationCount;

            // Utenti
            $totalUsers += User::whereDate('created_at', $day)->count();
            $cumulative_users_count[] = $totalUsers;

            // Parcheggi
            $parksCount = Park::whereDate('created_at', $day)->count();
            $parks_daily_count[] = $parksCount;
        }

        return view('admin.dashboard', [
            'reservations_count' => $reservations_count,
            'cumulative_users_count' => $cumulative_users_count,
            'parks_daily_count' => $parks_daily_count,
        ]);
    }
}
