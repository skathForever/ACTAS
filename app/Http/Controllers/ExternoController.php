<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActorExterno;

class ExternoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $externos=ActorExterno::all();
        return view('externo.index')->with('externos',$externos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('externo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $externos = new ActorExterno();

        $externos->nombre=$request->get('nombre');
        $externos->sigla=$request->get('sigla');

        $externos->save();

        return redirect ('externos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $externo = ActorExterno::find($id);
        return view('externo.edit')->with('externo',$externo);
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
        $externo=ActorExterno::find($id);

        $externo->nombre=$request->get('nombre');
        $externo->sigla=$request->get('sigla');

        $externo->save();

        return redirect ('externos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $externo=ActorExterno::find($id);

        $externo->delete();

        return redirect ('externos');
    }
}
