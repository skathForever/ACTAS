<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActorUrbanizacion;
use App\Models\Distrito;

class UrbanizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function byDistrito($id){

        $ActorUrbanizaciones = ActorUrbanizacion::where('id_distrito',$id)->get();
        return  $ActorUrbanizaciones;
    }


    public function index()
    {
        $urbanizacions=ActorUrbanizacion::all();
        return view('urbanizacion.index')->with('urbanizacions',$urbanizacions);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $distritos = Distrito::all();
        return view('urbanizacion.create')->with('distritos',$distritos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $urbanizacions = new Actorurbanizacion();

        $urbanizacions->nombre=$request->get('nombre');
        $urbanizacions->id_distrito=$request->get('id_distrito');

        $urbanizacions->save();

        return redirect ('urbanizacions');
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
        $distritos = Distrito::all();
        $urbanizacion = ActorUrbanizacion::find($id);
        return view('urbanizacion.edit')->with('urbanizacion',$urbanizacion)->with('distritos',$distritos);;
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
        $urbanizacion=ActorUrbanizacion::find($id);
        $urbanizacion->nombre=$request->get('nombre');
        $urbanizacion->id_distrito=$request->get('id_distrito');

        $urbanizacion->save();

        return redirect ('urbanizacions');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $urbanizacion=ActorUrbanizacion::find($id);

        $urbanizacion->delete();

        return redirect ('urbanizacions');
    }
}
