<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Validation\Rule;
use App\Models\ParkReview;
use Illuminate\Support\Facades\DB;



use Stripe\Stripe;
use Stripe\PaymentIntent;





class ReservationController extends Controller
{

    public function store(Request $request)
    {

        $form_field = $request->validate([
            'user_id' => 'required',
            'park_id' => 'required|exists:parks,id',
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
        return view('/userreservation')->with('message', 'Prenotazione effettuata con successo.');
        
    }

    public function success(Request $request)
    {
        // Effettua la creazione di una nuova prenotazione
        $reservation = new Reservation();
        $reservation->user_id = auth()->user()->id;
        $reservation->park_id = session('search.id');
        $reservation->data_inizio = session('search.date-input');
        $reservation->data_fine = session('search.date-output');
        $reservation->start_time = session('search.time-input');
        $reservation->end_time = session('search.time-output');
        $reservation->price = session('costoTotale');
        $reservation->veicolo = session('search.veicolo');
        $reservation->save();
        
        $owner_id = session('park_owner');
        $costo = session('costoTotale');
        $guadagno_admin = $costo * 0.10;
        $guadagno_owner = $costo - $guadagno_admin;        
 
        DB::table('users')
        ->where('id', $owner_id)
        ->increment('saldo', $guadagno_owner);

        DB::table('users')
        ->where('role', 1)
        ->increment('saldo', $guadagno_admin);




        return view('payment-success'); 
    }

    public function cancel(){
        return view('home');
    }

    

    public function index()
    {
        // Logica per ottenere l'elenco delle prenotazioni
    }

    public function userReservations()
    {
        $user = auth()->user();
        $reservations = $user->reservations;

        // Map each reservation to add the required timestamps
        $reservations = $reservations->map(function ($reservation) {
            $reservation->startTimestamp = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $reservation->data_inizio . ' ' . $reservation->start_time, 'Europe/Rome');
            $reservation->endTimestamp = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $reservation->data_fine . ' ' . $reservation->end_time, 'Europe/Rome');
            $reservation->currentTimestamp = \Carbon\Carbon::now('Europe/Rome');
            return $reservation;
        });

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
