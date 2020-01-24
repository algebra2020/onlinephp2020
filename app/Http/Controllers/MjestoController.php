<?php

namespace App\Http\Controllers;

use App\Mjesto;
use App\Zupanija;
use Illuminate\Http\Request;

class MjestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$mjesta=Mjesto::all();
        $mjesta=Mjesto::orderBy('naziv')->get();
        return view('mjesto.index',['mjesta'=>$mjesta]);
    }
    // /mjestos/indexbyzup
    public function indexbyzup()
    {
        //$mjesta=Mjesto::all();
        $zup=Zupanija::orderBy('naziv')->get();
        return view('mjesto.indexbyzup',['zup'=>$zup]);
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
     * @param  \App\Mjesto  $mjesto
     * @return \Illuminate\Http\Response
     */
    public function show(Mjesto $mjesto)
    {
        return view('mjesto.show',['m'=>$mjesto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mjesto  $mjesto
     * @return \Illuminate\Http\Response
     */
    public function edit(Mjesto $mjesto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mjesto  $mjesto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mjesto $mjesto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mjesto  $mjesto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mjesto $mjesto)
    {
        //
    }
}
