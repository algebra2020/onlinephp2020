<?php

namespace App\Http\Controllers;

use Validator;
use Session;
use App\Mjesto;
use App\Zupanija;
use Illuminate\Http\Request;

class MjestoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //$mjesta=Mjesto::all();
        $mjesta = Mjesto::orderBy('naziv')->get();
        return view('mjesto.index', ['mjesta' => $mjesta]);
    }

    // /mjestos/indexbyzup
    public function indexbyzup() {
        //$mjesta=Mjesto::all();
        $zup = Zupanija::orderBy('naziv')->get();
        return view('mjesto.indexbyzup', ['zup' => $zup]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $zupanije = Zupanija::orderBy('naziv')->get();
        return view('mjesto.create')->with(compact('zupanije'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $m = new Mjesto();
        $validator = Validator::make($request->all(), [
                    'naziv' => 'required|regex:/^[\pL\s\-]+$/u|max:191', //prima samo slova i razmake
                    'pbr' => 'required|unique|numeric|min:10000|max:60000',
                    'zupanija_id' => 'required|min:1|max:100',
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Greška, molim ispravno popuniti polja!');

            return redirect('/mjestos/create/')
                            ->withErrors($validator)
                            ->withInput();
        } else {
            // store

            $m->naziv = $request->naziv;
            $m->pbr = $request->pbr;
            $m->zupanija_id = $request->zupanija_id;
            $m->save();

            // objavi poruku
            Session::flash('message', 'Uspješno dodano mjesto ' . $request->naziv);
            // redirect
            return redirect()->route('mjestos.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mjesto  $mjesto
     * @return \Illuminate\Http\Response
     */
    public function show(Mjesto $mjesto) {
        return view('mjesto.show', ['m' => $mjesto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mjesto  $mjesto
     * @return \Illuminate\Http\Response
     */
    public function edit(Mjesto $mjesto) {
        $zupanije = Zupanija::orderBy('naziv')->get();
        return view('mjesto.edit', compact('mjesto', 'zupanije'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mjesto  $mjesto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mjesto $mjesto) {  // varijabla $mjesto ne smije mjenjati ime
        $validator = Validator::make($request->all(), [
                    'naziv' => 'required|regex:/^[\pL\s\-]+$/u|max:191', //prima samo slova i razmake
                    'pbr' => 'required|unique:App\Mjesto,pbr|numeric|min:10000|max:60000',
                    'zupanija_id' => 'required|min:1|max:100',
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Greška, molim ispravno popuniti polja!');

            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        } else {
            // store

            $mjesto->naziv = $request->naziv;
            $mjesto->pbr = $request->pbr;
            $mjesto->zupanija_id = $request->zupanija_id;
            $mjesto->save();

            // objavi poruku
            Session::flash('message', 'Uspješno izmjenjeno mjesto ' . $request->naziv);
            // redirect
            return redirect()->route('mjestos.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mjesto  $mjesto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mjesto $mjesto) {
        $mjesto->delete();
        Session::flash('message-success', 'Mjesto ' . $mjesto->naziv . ' je obrisano!');
        return redirect()->back();
    }

}
