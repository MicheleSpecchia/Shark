<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Validation\Rule;
use App\Models\ParkReview;

class ReservationController extends Controller
{

    public function store(Request $request)
    {
        $form_field = $request->validate([
            'user_id' => 'required',
            'park_id' => 'required',
            'data_inizio' => 'required',
            'data_fine' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'price' => 'required',
            'veicolo' => 'required',
        ]);

        $form_field['user_id'] = auth()->id();
        Reservation::create($form_field);
        return redirect('/')->with('message', 'Prenotazione effettuata con successo.');
    }


    public function index()
    {
        // Logica per ottenere l'elenco delle prenotazioni
    }

    public function userReservations()
    {
        $user = auth()->user();
        $reservations = $user->reservations;

        return view('reservation', compact('reservations'));
    }


    public function update(Request $request, $id)
    {
        // Logica per aggiornare una prenotazione
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
    
        return back()->with('message', 'Prenotazione cancellata con successo.');
    }
}
