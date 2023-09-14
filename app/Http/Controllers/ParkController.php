<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Park;
use App\Models\Reservation;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\ParkReview;
use Carbon\Carbon;




class ParkController extends Controller
{

    public function show(Park $park)
    {
        return view('parks.show', [
            'park' => $park
        ]);
    }

    public function search(Request $request)
    {


        $form_field = $request->validate([
            'location' => ['required'],
            'veicolo' => ['required'],
            'date-input' => ['required'],
            'date-output' => ['required'],
            'time-input' => ['required'],
            'time-output' => ['required'],
        ]);
        
        $location = $request->input('location');
        $vehicle = $request->input('veicolo');
        $checkInDate = $request->input('date-input');
        $checkOutDate = $request->input('date-output');
        $checkInTime = $request->input('time-input');
        $checkOutTime = $request->input('time-output');

        $query = Park::query();

        $query->where('location', 'like', "$location%");

        if ($vehicle === 'auto') {
            $query->where('automobili', 1);
        } elseif ($vehicle === 'moto') {
            $query->where('motocicli', 1);
        } elseif ($vehicle === 'camper') {
            $query->where('furgoni', 1);
        }

        $parks = $query->get();
        $availableParks = [];

        foreach ($parks as $park) {
            $overlappingReservations = Reservation::where('park_id', $park->id)
                ->where(function ($query) use ($checkInDate, $checkOutDate, $checkInTime, $checkOutTime) {
                    $query->where(function ($query) use ($checkInDate, $checkOutDate) {
                        $query->where('data_fine', '>', $checkInDate)
                            ->where('data_inizio', '<', $checkOutDate);
                    })->orWhere(function ($query) use ($checkInTime, $checkOutTime) {
                        $query->where('end_time', '>', $checkInTime)
                            ->where('start_time', '<', $checkOutTime);
                    });
                })
                ->get();


            if ($overlappingReservations->isEmpty()) {
                $availableParks[] = $park;
            }
        }

        $perPage = 8; // Numero di parcheggi per pagina
        $page = $request->input('page', 1); // Ottieni il numero di pagina dalla richiesta
        $parks = new Paginator($availableParks, $perPage, $page);
        return view('user', compact('parks'));
    }

    public function createReview(Park $park, Reservation $reservation)
    {
        // Verifica che la prenotazione appartenga al parco specificato
        if ($park->id != $reservation->park_id) {
            abort(403, 'Mismatch between park and reservation.');
        }


        // verifica che la prenotazione sia stata completata
        if ($reservation->data_fine < now() && $reservation->user_id == auth()->id()) {
            return view('create_review', ['park' => $park, 'reservation' => $reservation]);
        } else {
            abort(403, 'Unauthorized Action');
        }
    }

    public function storeReview(Request $request, Park $park, Reservation $reservation)
    {
        // Validazione dei dati inseriti dall'utente
        $data = $request->validate([
            'title' => 'required|max:255',
            'feedback' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Creazione di una nuova recensione e assegnazione dei dati
        $review = new ParkReview($data);

        // Assegnazione degli ID dell'utente, del parco e della prenotazione alla recensione
        $review->user_id = auth()->id();
        $review->park_id = $park->id;
        $review->reservation_id = $reservation->id;  // Questa è la nuova riga

        // Salvataggio della recensione nel database
        $review->save();

        // Reindirizzamento verso la pagina delle prenotazioni con un messaggio di conferma
        return redirect()->route('user.reservations')->with('message', 'Recensione inviata con successo!');
    }



    //show create form
    public function create()
    {
        return view('parks.create');
    }

    //store park data
    public function store(Request $request)
    {
        $form_field = $request->validate([
            'address' => 'required',
            'cap' => 'required',
            'location' => 'required',
            'civico' => 'required',
            'description' => 'required'
        ]);


        if ($request->hasFile('foto')) {
            $form_field['foto'] = $request->file('foto')->store('fotos', 'public');
        }

        $form_field['user_id'] = auth()->id();

        Park::create($form_field);

        return redirect('/')->with('message', 'Annuncio created successfully!');
    }

    //show edit form
    public function edit(Park $park)
    {
        return view('parks.edit', ['park' => $park]);
    }

    //store park data
    public function update(Request $request, Park $park)
    {
        if ($park->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $form_field = $request->validate([
            'address' => 'required',
            'cap' => 'required',
            'location' => 'required',
            'civico' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('foto')) {
            $form_field['foto'] = $request->file('foto')->store('fotos', 'public');
        }

        $park->update($form_field);

        return back()->with('message', 'Annuncio updated successfully!');
    }

    public function destroy(Park $park)
    {
        if ($park->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $park->delete();
        return redirect('/')->with('message', 'Annuncio deleted successfully!');
    }

    public function manage(Park $park)
    {
        return view('parks.manage', ['parks' => auth()->user()->parks()->get()]);
    }
}
