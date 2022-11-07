<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoActa;

class TipoActaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoactas=TipoActa::all();
        return view('tipoacta.index')->with('tipoactas',$tipoactas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoacta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoactas = new TipoActa();

        $tipoactas->tipo_acta=$request->get('tipo_acta');
        

        $tipoactas->save();

        return redirect ('tipoactas');
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
        $tipoacta = TipoActa::find($id);
        return view('tipoacta.edit')->with('tipoacta',$tipoacta);
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
        $tipoacta=TipoActa::find($id);

        $tipoacta->tipo_acta=$request->get('tipo_acta');
        

        $tipoacta->save();

        return redirect ('tipoactas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoacta=TipoActa::find($id);

        $tipoacta->delete();

        return redirect ('tipoactas');
    }
}
