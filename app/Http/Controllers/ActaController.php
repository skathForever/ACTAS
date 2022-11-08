<?php

namespace App\Http\Controllers;
use App\Models\Acta;
use App\Models\TipoActa;

use Illuminate\Http\Request;

class ActaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $actas=Acta::all();
        return view('acta.index')->with('actas',$actas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $tipoactas = TipoActa::all();
        return view('acta.create')->with('tipoactas',$tipoactas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actas = new Acta();

        $actas->id_tipo=$request->get('id_tipo');
        $actas->tema=$request->get('tema');
        $actas->hora=$request->get('hora');
        $actas->fecha=$request->get('fecha');
        $actas->relevancia=$request->get('relevancia');
        $actas->scan=$request->get('scan');
        
        $actas->save();

        return redirect ('actas');
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
        $acta = Acta::find($id);
        return view('acta.edit')->with('acta',$acta);
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
        $acta=Acta::find($id);

        $acta->id_tipo = $request->get('id_tipo');
        $acta->tema = $request->get('tema');
        $acta->hora=$request->get('hora');
        $acta->fecha=$request->get('fecha');
        $acta->relevancia=$request->get('relevancia');
        $acta->scan=$request->get('scan');
        $acta->save();
        return redirect ('actas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acta=Acta::find($id);

        $acta->delete();

        return redirect ('actas');
    }
}
