<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Park;
use App\Models\Reservation;
use App\Models\ParkImage;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\ParkReview;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;




class ParkController extends Controller
{

    public function show(Park $park)
    {
        $park->load('user');
        
        $reviews = $park->reviews;
        

        return view('parks.show', [
            'park' => $park,
            'reviews' => $reviews,
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

        /*--- sessione avvio     ---*/
        

        session()->put('search.location', $request->input('location'));
        session()->put('search.date-input', $request->input('date-input'));
        session()->put('search.time-input', $request->input('time-input'));
        session()->put('search.date-output', $request->input('date-output'));
        session()->put('search.time-output', $request->input('time-output'));
        session()->put('search.veicolo', $request->input('veicolo'));


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

        $perPage = 8;
        $page = $request->input('page', 1);
        $parks = new Paginator($availableParks, $perPage, $page);
        if (Auth::user()) {
            $user_role = Auth::user()->role;

            switch ($user_role) {
                case 2:
                    return view('user', compact('parks'));
                    break;
            }
        } else {
            return view('home-parks', compact('parks'));
        }
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

    public function create()
    {
        $currentStep = 1;
        return view('parks.create', compact('currentStep'));
    }

    public function storeStep1(Request $request)
    {
        $form_field = $request->validate([
            'location' => 'required',
            'address' => 'required',
            'cap' => 'required',
        ]);

        session(['step1' => $form_field]);
        $currentStep = 2;
        return view('parks.create', compact('currentStep'));
    }

    public function storeStep2(Request $request)
    {
        $form_field = $request->validate([
            'image_path' => 'required',
            'description' => 'required',
        ]);

        session(['step2' => $form_field]);

        $currentStep = 3;
        return view('parks.create', compact('currentStep'));
    }

    public function storeStep3(Request $request)
    {
        $form_field = $request->validate([
            'automobili',
            'motocicli',
            'camper',
            'optional',
            'camere',
            'tastierino',
            'aperto',
            'chiuso',
            'totem',
            'privato',
        ]);

        session(['step3' => $form_field]);
        $currentStep = 4;
        return view('parks.create', compact('currentStep'));
    }

    public function storeStep4(Request $request)
    {
        $form_field = $request->validate([
            'scambio',
            'shark',
        ]);

        session(['step4' => $form_field]);

        $currentStep = 5;
        return view('parks.create', compact('currentStep'));
    }

    public function storeStep5(Request $request)
    {
        $form_field = $request->validate([
            'price' => 'required',
        ]);

        session(['step5' => $form_field]);

        $currentStep = 6;
        return view('parks.create', compact('currentStep'));
    }

    public function storeStep6(Request $request)
    {
        $form_field = $request->validate([
            'cond'
        ]);

        session(['step6' => $form_field]);
    }

    //store park data
    public function store(Request $request)
    {
        $step1Data = session('step1');
        $step2Data = session('step2');
        $step3Data = session('step3');
        $step4Data = session('step4');
        $step5Data = session('step5');
        $step6Data = session('step6');


        if ($request->hasFile('foto')) {
            $form_field['foto'] = $request->file('foto')->store('fotos', 'public');
        }

        $park = new Park;

        //step1
        $park['user_id'] = auth()->id();
        $park['address'] = $step1Data['address'];
        $park['cap'] = $step1Data['cap'];
        $park['location'] = $step1Data['location'];

        //step2
        $park['description'] = $step2Data['description'];

        //step3
        $park['automobili'] = in_array('automobili', $step3Data) ? 1 : 0;
        $park['motocicli'] = in_array('motocicli', $step3Data) ? 1 : 0;
        $park['camper'] = in_array('camper', $step3Data)  ? 1 : 0;
        $park['camere'] = in_array('camere', $step3Data)  ? 1 : 0;
        $park['tastierino'] = in_array('tastierino', $step3Data)  ? 1 : 0;
        $park['aperto'] = in_array('aperto', $step3Data)  ? 1 : 0;
        $park['chiuso'] = in_array('chiuso', $step3Data)  ? 1 : 0;
        $park['totem'] = in_array('totem', $step3Data)  ? 1 : 0;
        $park['privato'] = in_array('privato', $step3Data)  ? 1 : 0;

        //step4
        $park['scambio'] = in_array('scambio', $step4Data)  ? 1 : 0;
        $park['shark'] = in_array('shark', $step4Data)  ? 1 : 0;

        //step5
        $park['price'] = $step5Data['price'];

        $park->save();

        $parkImg = new ParkImage;
        $parkImg['park_id'] = $park['id'];
        $parkImg['image_path'] = $step2Data['image_path'];


        return redirect('/')->with('message', 'Annuncio created successfully!');
    }

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
