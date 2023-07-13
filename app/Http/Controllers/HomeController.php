<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class HomeController extends Controller
{

      /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        #$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()) {
            $user_role = Auth::user()->role;

            switch ($user_role) {
                case 1:
                    return view('admin.admin');
                    break;
                case 2:
                    return view('user');
                    break;
                default:
                    Auth::logout();
                    return redirect('/login')->with('error', 'Oops, qualcosa è andato storto!');
            }
        } else {
            return view('home');
        }
    }

}
