<?php

namespace App\Http\Controllers;
use App\Models\Park;

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
            'parks' => Park::latest()->filter(request(['cap', 'search']))->paginate(6)
        ]);
    }
}
