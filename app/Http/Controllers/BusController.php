<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buses=Bus::all();
        return view('admin.bus.index', compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $buses=Bus::all();
        return view('admin.bus.create');
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
            'nomBus' =>'required|string',
            'matriculeBus' =>'required|string',
            'numeroPlace' =>'required|string',
        ]);
        $buses=Bus::create([
            'nomBus' => $request->nomBus,
            'matriculeBus' => $request->matriculeBus,
            'numeroPlace' => $request->numeroPlace,
    ]);
    session()->flash('success','Le bus a été bien enregistrer');
    return redirect()->route('buses.show',$buses->id );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        $buses=Bus::findOrfail($id);
        return view('admin\bus\show', compact('buses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $buses=Bus::findOrfail($id);
        return view('admin\bus\edit', compact('buses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'nomBus'=>'required|string',
            'numeroPlace'=>'required|string'
        ]);
        $buses=Bus::findOrfail($id);
        $buses->nomBus=$request->nomBus;
        $buses->matriculeBus=$request->matriculeBus;
        $buses->numeroPlace=$request->numeroPlace;
        $buses->save();
        session()->flash('success','Le bus a été modifier avec succès');
        return redirect()->route('buses.show',$buses->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $buses=Bus::findOrfail($id);
        $buses->delete();
        session()-> flash('success',' Le bus a été supprimer avec succès');
        return redirect()->route('buses.index');
    }
}
