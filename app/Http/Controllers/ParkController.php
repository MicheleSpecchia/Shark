<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Park;
use App\Models\Reservation;
use Illuminate\Validation\Rule;
use App\Models\User;

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
        $location = $request->input('location');
        $vehicle = $request->input('veicolo');
        $checkInDate = $request->input('check-in');
        $checkOutDate = $request->input('check-out');
        $checkInTime = $request->input('time-in');
        $checkOutTime = $request->input('time-out');

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
        
        $perPage = 10; // Numero di parcheggi per pagina
        $page = $request->input('page', 1); // Ottieni il numero di pagina dalla richiesta
        $parks = new Paginator($availableParks, $perPage, $page);
        return view('user', compact('parks'));
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
