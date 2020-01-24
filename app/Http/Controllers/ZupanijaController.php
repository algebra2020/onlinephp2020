<?php

namespace App\Http\Controllers;

use App\Zupanija;
use Illuminate\Http\Request;

class ZupanijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$zupanije=Zupanija::all();
        //$zupanije=Zupanija::all()->sortBy('naziv'); // sortiranje nakon izvršenja DB::query
        $zupanije=Zupanija::orderBy('naziv')->get(); // sortiranje na razini baze DB::query <--BRŽE
        return view('zupanija.index',['zup'=>$zupanije]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zupanija.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $z=new Zupanija();
        $z->naziv=$request->naziv;
        $z->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Zupanija  $zupanija
     * @return \Illuminate\Http\Response
     */
    public function show(Zupanija $zupanija) // dovoljno je prosljediti id i on iz njega napravi objekt
    {
       // $zupanije=Zupanija::all();
        return view('zupanija.show',['z'=>$zupanija]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zupanija  $zupanija
     * @return \Illuminate\Http\Response
     */
    public function edit(Zupanija $zupanija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zupanija  $zupanija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zupanija $zupanija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Zupanija  $zupanija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zupanija $zupanija)
    {
        //
    }
}
