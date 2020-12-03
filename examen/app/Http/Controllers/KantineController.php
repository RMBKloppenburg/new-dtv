<?php

namespace App\Http\Controllers;

use App\Models\kantine;
use Illuminate\Http\Request;

class KantineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index gerelateerd
        //return view('Backend.KantineBackend', compact('kantines'));
        $kantine = \DB::table('kantines')->get();
        return view("Backend.KantineBackend",
            [
                "kantine" => $kantine
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //aanmaken :)
        return view('Backend.CreateKantine');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Opslaan van de aangemaakte data
        Kantine::create(request()->validate(
            [
                "naam" => 'required',
                'catogorie' => 'required',
                'prijs' => 'required',
                'soort' => 'required',
                'hoeveelheid' => 'required'
            ]));
        return redirect()->route('adminkantine');

        /**
        $request->validate(
        [
        "naam" => 'required',
        'catogorie' => 'required',
        'bedrijf' => 'required',
        'prijs' => 'required',
        'soort' => 'required',
        'hoeveelheid' => 'required'
        ]);
        Kantine::create($request->all());
        return redirect()->route('kantine');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kantine  $kantine
     * @return \Illuminate\Http\Response
     */
    public function show(kantine $kantine)
    {
        //
        //return view('Backend.KantineBackend', compact('kantine'));
        $kantine = \DB::table('kantines')->get();
        return view("kantine",
            [
                "kantine" => $kantine
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kantine  $kantine
     * @return \Illuminate\Http\Response
     */
    public function edit(kantine $kantine)
    {
        //
        return view('Backend.EditKantine', compact("kantine"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kantine  $kantine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kantine $kantine)
    {
        //Bijwerken van de het product
        $kantine->update(request()->validate(
            [
                "naam" => 'required',
                'catogorie' => 'required',
                'prijs' => 'required',
                'soort' => 'required',
                'hoeveelheid' => 'required'
            ]));
        return redirect()->route('adminkantine');
        /**
        $request->validate(
        [
        "naam" => 'required',
        'catogorie' => 'required',
        'bedrijf' => 'required',
        'prijs' => 'required',
        'soort' => 'required',
        'hoeveelheid' => 'required'
        ]);
        $kantine->update($request->all());
        return redirect()->route('adminkantine');
         */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kantine  $kantine
     * @return \Illuminate\Http\Response
     */
    public function destroy($kantine)
    {
        //verwijderen product
        //Hij gaat in de kantine model (waar de database tabel staat) en kijkt voor ID
        //en dat vergelijkt hij met $kantine

        kantine::where("id", $kantine)->delete();

        return redirect()->route('adminkantine');
    }
}
