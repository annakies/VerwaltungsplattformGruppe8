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
       /* $this->validate($request, [
            'bezeichnung' => 'required |string| max:225',     
            'erforderliche_rolle' => 'required' , 
        ]);
        */
        $leistung = new Leistung;
        $leistung -> bezeichnung = $request -> bezeichnung;
       // if (Leistung::where('bezeichnung', '=', Input::get('bezeichnung'))->exists()) {
         //   return @error;
          //  };
        $leistung -> erforderliche_rolle = $request -> erforderliche_rolle;
        $leistung -> save();
        
        //auth()->attempt($request->only('bezeichnung', 'erforderliche_rolle'));
        return back();
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
    public function destroy($id)
    {
      $data=Leistung::find($id);
      $data -> delete();
      return redirect('leistungskatalog');
    }
   
}
