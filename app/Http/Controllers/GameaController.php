<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActorGamea;

class GameaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gameas=ActorGamea::all();
        return view('gamea.index')->with('gameas',$gameas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gamea.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gameas = new ActorGamea();

        $gameas->nombre=$request->get('nombre');
        $gameas->sigla=$request->get('sigla');

        $gameas->save();

        return redirect ('gameas');
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
        $gamea = ActorGamea::find($id);
        return view('gamea.edit')->with('gamea',$gamea);
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
        $gamea=ActorGamea::find($id);

        $gamea->nombre=$request->get('nombre');
        $gamea->sigla=$request->get('sigla');

        $gamea->save();

        return redirect ('gameas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gamea=ActorGamea::find($id);

        $gamea->delete();

        return redirect ('gameas');
    }
}
