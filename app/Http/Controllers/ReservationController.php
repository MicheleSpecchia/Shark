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
            'park_id' => 'required|exists:parks,id',  // assicurati che il park_id esista nella tabella dei parchi
            'data_inizio' => 'required',
            'data_fine' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'veicolo' => 'required'         
        ]);

        // Ottieni il parco specificato dal park_id
        $park = \App\Models\Park::findOrFail($form_field['park_id']);

        $form_field['user_id'] = auth()->id();

        // Preleva il prezzo dal parco
        $form_field['price'] = $park->price;

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
        try {
            $reservation = Reservation::findOrFail($id);
            $reservation->delete();

            if (request()->ajax()) {
                return response()->json(['status' => 'success'], 200);
            }

            return back()->with('message', 'Prenotazione cancellata con successo.');
        } catch (\Exception $e) {
            if (request()->ajax()) {
                return response()->json(['status' => 'error'], 500);
            }

            return back()->with('error', 'Si è verificato un errore durante la cancellazione.');
        }
    }
}
