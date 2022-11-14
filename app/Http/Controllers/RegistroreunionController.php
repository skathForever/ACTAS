<?php

namespace App\Http\Controllers;
use App\Models\Acta;
use App\Models\Actor;
use App\Models\TipoActa;
use DB;

use Illuminate\Http\Request;

class RegistroreunionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index2($id)
    {
        $actas = Acta::where('id_proyecto',$id)->get();
        return view('acta.index4')->with('actas',$actas);
    }

 

    public function index()
    {
        $actas=Acta::all();
        return view('acta.index2')->with('actas',$actas);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actor=Actor::find($id);
        $actor->delete();
        return redirect ("/reunions2/{$actor->id_acta}/reunionByActa");
    }
}
