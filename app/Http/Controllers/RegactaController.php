<?php

namespace App\Http\Controllers;
use App\Models\RegActa;

use Illuminate\Http\Request;

class RegactaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regactas=RegActa::all();
        return view('regacta.index')->with('regactas',$regactas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regacta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regactas = new RegActa();

        $regactas->id_tipo=$request->get('tipo_acta');
        $regactas->tema=$request->get('tema');
        $regactas->hora=$request->get('hora');
        $regactas->fecha=$request->get('fecha');
        $regactas->relevancia=$request->get('relevancia');
        $regactas->scan=$request->get('scan');
        

        $regactas->save();

        return redirect ('regactas');
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
        $regacta = regacta::find($id);
        return view('regacta.edit')->with('regacta',$regacta);
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
        $regacta=regacta::find($id);

        $regactas->id_tipo=$request->get('tipo_acta');
        $regactas->tema=$request->get('tema');
        $regactas->hora=$request->get('hora');
        $regactas->fecha=$request->get('fecha');
        $regactas->relevancia=$request->get('relevancia');
        $regactas->scan=$request->get('scan');
        

        $regacta->save();

        return redirect ('regactas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $regacta=regacta::find($id);

        $regacta->delete();

        return redirect ('regactas');
    }
}
