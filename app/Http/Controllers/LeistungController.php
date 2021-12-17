<?php

namespace App\Http\Controllers;

use App\Models\Leistung;
use Illuminate\Http\Request;

class LeistungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Leistung::all();
        return view('verwaltung/leistungskatalog',['leistungs' => $data]);
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
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leistung  $leistung
     * @return \Illuminate\Http\Response
     */
    public function show(Leistung $leistung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leistung  $leistung
     * @return \Illuminate\Http\Response
     */
    public function edit(Leistung $leistung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leistung  $leistung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leistung $leistung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leistung  $leistung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leistung $leistung)
    {
        //
    }
}
