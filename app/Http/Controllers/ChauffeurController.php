<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use Illuminate\Http\Request;
use App\Http\Requests\StoreChauffeurRequest;
use App\Http\Requests\UpdateChauffeurRequest;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chauffeurs=Chauffeur::all();
        return view('admin.chauffeur.index', compact('chauffeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $chauffeurs=Chauffeur::all();
        return view('admin.chauffeur.create');
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
            'nomChauffeur' =>'required|string',
            'contactChauffeur' =>'required|string',
        ]);
        $chauffeurs=Chauffeur::create([
            'nomChauffeur' => $request->nomChauffeur,
            'contactChauffeur' => $request->contactChauffeur,
    ]);
    session()->flash('success','Le chauffeur a été bien enregistrer');
    return redirect()->route('chauffeurs.show',$chauffeurs->id );
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
        $chauffeurs=Chauffeur::findOrfail($id);
        return view('admin\chauffeur\show', compact('chauffeurs'));
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
         $chauffeurs=Chauffeur::findOrfail($id);
        return view('admin\chauffeur\edit', compact('chauffeurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $this->validate($request,[
            'nomChauffeur'=>'required|string',
            'contactChauffeur'=>'required|string'
        ]);
        $chauffeurs=Chauffeur::findOrfail($id);
        $chauffeurs->nomChauffeur=$request->nomChauffeur;
        $chauffeurs->contactChauffeur=$request->contactChauffeur;
        $chauffeurs->save();
        session()->flash('success','Le chauffeur a été modifier avec succès');
        return redirect()->route('chauffeurs.show',$chauffeurs->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chauffeur  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $chauffeurs=Chauffeur::findOrfail($id);
        $chauffeurs->delete();
        session()-> flash('success',' Le chauffeurs a été supprimer avec succès');
        return redirect()->route('chauffeurs.index');
    }
}
