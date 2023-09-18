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


        //calcolo costo prenotazione
        $dataInizioPrenotazione = session('search.date-input');
        $orarioInizioPrenotazione = session('search.time-input');
        $dataFinePrenotazione = session('search.date-output');
        $orarioFinePrenotazione = session('search.time-output');

        $inizio = Carbon::parse($dataInizioPrenotazione . ' ' . $orarioInizioPrenotazione);
        $fine = Carbon::parse($dataFinePrenotazione . ' ' . $orarioFinePrenotazione);

        $minutiPrenotazione = $inizio->diffInMinutes($fine); //minuti totali
        $minutiPrenotazione = $minutiPrenotazione / 30; //numero di intervalli di 30 minuti

        $costoAlMinuto = $park->price;  //prezzo per 30min
        $costoTotale = $minutiPrenotazione * $costoAlMinuto;

        session()->put('costoTotale', $costoTotale);



        return view('parks.show', [
            'park' => $park,
            'reviews' => $reviews,
            'costoTotale' => $costoTotale,
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
            $query->where('camper', 1);
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
            return view('home', compact('parks'));
        }
    }


    public function storeReview(Request $request, Park $park, Reservation $reservation)
    {
        try {
            $data = $request->validate([
                'title' => 'required|max:255',
                'feedback' => 'required',
                'rating' => 'required|integer|min:1|max:5',
            ]);

            $review = new ParkReview($data);
            $review->user_id = auth()->id();
            $review->park_id = $park->id;
            $review->reservation_id = $reservation->id;
            $review->save();

            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
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
            'automobili' => 'nullable',
            'motocicli' => 'nullable',
            'camper' => 'nullable',
            'camere' => 'nullable',
            'tastierino' => 'nullable',
            'aperto' => 'nullable',
            'chiuso' => 'nullable',
            'totem' => 'nullable',
            'privato' => 'nullable',
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
    public function parkStore(Request $request)
    {

        $step1Data = session('step1');
        $step2Data = session('step2');
        $step3Data = session('step3');
        $step4Data = session('step4');
        $step5Data = session('step5');

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
        $park['camper'] = in_array('camper', $step3Data) ? 1 : 0;
        $park['camere'] = in_array('camere', $step3Data) ? 1 : 0;
        $park['tastierino'] = in_array('tastierino', $step3Data) ? 1 : 0;
        $park['aperto'] = in_array('aperto', $step3Data) ? 1 : 0;
        $park['chiuso'] = in_array('chiuso', $step3Data) ? 1 : 0;
        $park['totem'] = in_array('totem', $step3Data) ? 1 : 0;
        $park['privato'] = in_array('privato', $step3Data)  ? 1 : 0;

        //step4
        $park['scambio'] = in_array('scambio', $step4Data) ? 1 : 0;
        $park['shark'] = in_array('shark', $step4Data) ? 1 : 0;

        //step5
        $park['price'] = $step5Data['price'];

        $park->save();

        $parkImg = new ParkImage;
        $parkImg['park_id'] = $park['id'];
        $parkImg['image_path'] = $step2Data['image_path'];
        $parkImg->save();

        return redirect('/')->with('message', 'Annuncio created successfully!');
    }

    public function edit(Park $park)
    {
        return view('parks.edit', ['park' => $park]);
    }

    public function update(Request $request, Park $park)
    {
        if ($park->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $form_field = $request->validate([
            'address' => 'required',
            'cap' => 'required',
            'location' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $park->update($form_field);


        if ($request->hasFile('foto')) {
            $form_field['foto'] = $request->file('foto')->store('fotos', 'public');
            $parkImg = new ParkImage;
            $parkImg['park_id'] = $park['id'];
            $parkImg['image_path'] = $form_field['foto'];
            $parkImg->save();
        }

        return redirect('parks/manage');
    }

    public function destroy(Park $park)
    {

        $uncompletedReservations = $park->reservations->filter(function ($reservation) {
            return $reservation->data_fine >= now();
        });

        if ($uncompletedReservations->count() > 0) {
            return back()->with('error', 'Non puoi eliminare il parco perché ha prenotazioni non terminate.');
        }

        if ($park->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $park->delete();
        return redirect('parks/manage');
    }

    public function manage()
    {
        $userId = Auth::user()->id;
        $userParks = Park::where('user_id', $userId)->get();
        return view('parks.manage', ['parks' => $userParks]);
    }

    public function parkReservation($parkId)
    {
        $park = Park::findOrFail($parkId);
        $prenotazioni = $park->reservations;

        return view('parks.park-reserv', compact('prenotazioni', 'park'));
    }
}
