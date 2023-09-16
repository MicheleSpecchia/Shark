<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use App\Models\Park;
use App\Models\Reservation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user', [
            'parks' => Park::latest()->paginate(8)
        ]);
    }

    

    
    public function update(Request $request)
    {
        // Valida i dati del form
        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Aggiungi le regole di validazione necessarie
        ]);

        // Carica l'immagine
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/profiles', $imageName); // Memorizza l'immagine nella cartella "storage/app/public/profiles"
            
            // Aggiorna il percorso dell'immagine del profilo dell'utente nel database
            $user = auth()->user();
            $user->avatar = 'storage/profiles/' . $imageName;
            $user->save();
        }

        return redirect()->back()->with('success', 'Immagine del profilo aggiornata con successo.');
    }
    

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        // Aggiorna il campo "first_name" solo se è stato inviato
        if ($request->filled('first_name')) {
            $user->nome = $request->input('first_name');
        }

        // Aggiorna il campo "last_name" solo se è stato inviato
        if ($request->filled('last_name')) {
            $user->cognome = $request->input('last_name');
        }

        // Aggiorna il campo "location" solo se è stato inviato
        if ($request->filled('location')) {
            $user->indirizzo = $request->input('location');
        }

        // Aggiorna il campo "email" solo se è stato inviato
        if ($request->filled('email')) {
            $user->email = $request->input('email');
        }

        $user->save();

        return redirect()->back()->with('success', 'Dati dell\'utente aggiornati con successo.');

        
    }



}
