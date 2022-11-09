<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyecto.index')->with('proyectos',$proyectos);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyecto = new Proyecto();

        $proyecto->nombre=$request->get('nombre');
        $proyecto->estado=$request->get('estado');
        $proyecto->descripcion=$request->get('descripcion');
        $proyecto->scan=$request->get('scan');

        $archivo=$request->file('scan');
        $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
        $proyecto->scan=$archivo->getClientOriginalName();

        $proyecto->save();

        return redirect ('proyectos');
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
        $proyecto = Proyecto::find($id);
        return view('proyecto.edit')->with('proyecto',$proyecto);
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
        $proyecto=Proyecto::find($id);

        $proyecto->nombre=$request->get('nombre');
        $proyecto->estado=$request->get('estado');
        $proyecto->descripcion=$request->get('descripcion');
        $proyecto->scan=$request->get('scan');

        $archivo=$request->file('scan');
        $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
        $proyecto->scan=$archivo->getClientOriginalName();


        $proyecto->save();

        return redirect ('proyectos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto=Proyecto::find($id);

        $proyecto->delete();

        return redirect ('proyectos');
    }
}
