<?php

namespace App\Http\Controllers;

use App\Models\Coli;
use Illuminate\Http\Request;

class ColiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('coli');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coli  $coli
     * @return \Illuminate\Http\Response
     */
    public function show(Coli $coli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coli  $coli
     * @return \Illuminate\Http\Response
     */
    public function edit(Coli $coli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coli  $coli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coli $coli)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coli  $coli
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coli $coli)
    {
        //
    }
}
