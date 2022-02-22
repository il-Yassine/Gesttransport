<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trajet;
use App\Models\Bus;
use App\Models\Chauffeur;
use App\Models\Coli;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('auth2');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       if (auth()->user()->role_id==1) {
        return view('home');
       }


        $user= User::where('role_id','1')
        ->get();
        $buses=Bus::all();
        $chauffeurs=Chauffeur::all();
        $trajets=Trajet::all();

        return view('admin',['users'=>$user], compact('buses','chauffeurs','trajets'));
        //return view('home');
    }
}
