<?php

namespace App\Http\Controllers;

use App\VenueHome;
use App\Veneu;
use Illuminate\Http\Request;

class VenuessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venues = Veneu::latest()->paginate(8);
        return view('venue.index',compact('venues'))
                ->with('i',(request()->input('page', 1) -1 ) *5);
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
    public function showing($id){
        $veneu = \App\Veneu::find($id);
        return view('venue/show',['veneu' => $veneu]);  
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
     * @param  \App\VenueHome  $venueHome
     * @return \Illuminate\Http\Response
     */
    public function show(Veneu $veneu)
    {
        return view('venue.show',compact('veneu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VenueHome  $venueHome
     * @return \Illuminate\Http\Response
     */
    public function edit(VenueHome $venueHome)
    {
        return view('venue.edit',compact('veneu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VenueHome  $venueHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VenueHome $venueHome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VenueHome  $venueHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(VenueHome $venueHome)
    {
        //
    }
}
