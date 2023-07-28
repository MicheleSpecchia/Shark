<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Park;
use Illuminate\Validation\Rule;
use App\Models\User;

class ParkController extends Controller
{
    //show all parks
    /*public function index()
    {
        return view('parks.index', [
            'parks' => Park::latest()->filter(request(['cap', 'search']))->paginate(6)
        ]);
    }*/

    //show single park
    public function show(Park $park)
    {
        return view('parks.show', [
            'park' => $park
        ]);
    }

    public function search(Request $request)
    {
        $query = Park::query();

        // Filtraggio in base ai parametri di ricerca
        $query->filter($request->only(['cap', 'search']));

        // Ottenere i risultati paginati
        $parks = $query->paginate(10);

        return view('user', compact('parks'));
    }

    //show create form
    public function create()
    {
        return view('parks.create');
    }

    //store park date
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
