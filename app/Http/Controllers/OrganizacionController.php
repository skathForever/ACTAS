<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActorOrganizacion;

class OrganizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizacions=ActorOrganizacion::all();
        return view('organizacion.index')->with('organizacions',$organizacions);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organizacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organizacions = new ActorOrganizacion();

        $organizacions->nombre=$request->get('nombre');
        $organizacions->sigla=$request->get('sigla');

        $organizacions->save();

        return redirect ('organizacions');
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
        $organizacion = ActorOrganizacion::find($id);
        return view('organizacion.edit')->with('organizacion',$organizacion);
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
        $organizacion=ActorOrganizacion::find($id);

        $organizacion->nombre=$request->get('nombre');
        $organizacion->sigla=$request->get('sigla');

        $organizacion->save();

        return redirect ('organizacions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organizacion=ActorOrganizacion::find($id);

        $organizacion->delete();

        return redirect ('organizacions');
    }
}
