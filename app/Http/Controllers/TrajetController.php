<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use Illuminate\Http\Request;

class TrajetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trajets=Trajet::all();
        return view('admin.trajet.index', compact('trajets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $trajets=Trajet::all();
        return view('admin.trajet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'villeDeDepart' =>'required|string',
            'villeDarrive' =>'required|string',
            'tarifsVoyage' =>'required|string',
            'tarifsColi' =>'required|string',
        ]);
        $trajets=Trajet::create([
            'villeDeDepart' => $request->villeDeDepart,
            'villeDarrive' => $request->villeDarrive,
            'tarifsVoyage' => $request->tarifsVoyage,
            'tarifsColi' => $request->tarifsColi,
    ]);
    session()->flash('success','Le Trajet a été bien enregistrer');
    return redirect()->route('trajets.show',$trajets->id );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $trajets=Trajet::findOrfail($id);
        return view('admin\trajet\show', compact('trajets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $trajets=Trajet::findOrfail($id);
        return view('admin\trajet\edit', compact('trajets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $this->validate($request,[
            'villeDeDepart' =>'required|string',
            'villeDarrive' =>'required|string',
            'tarifsVoyage' =>'required|string',
            'tarifsColi' =>'required|string',
        ]);
        $trajets=Trajet::findOrfail($id);
        $trajets->villeDeDepart=$request->villeDeDepart;
        $trajets->villeDarrive=$request->villeDarrive;
        $trajets->tarifsVoyage=$request->tarifsVoyage;
        $trajets->tarifsColi=$request->tarifsColi;
        $trajets->save();
        session()->flash('success','Le Trajet a été modifier avec succès');
        return redirect()->route('trajets.show',$trajets->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trajet $id)
    {
        //
        $trajets=Trajet::findOrfail($id);
        $trajets->delete();
        session()-> flash('success',' Le Trajet a été supprimer avec succès');
        return redirect()->route('trajets.index');
    }
}
