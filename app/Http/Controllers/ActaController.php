<?php

namespace App\Http\Controllers;
use App\Models\Acta;
use App\Models\TipoActa;
use DB;
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

    public function index2()
    {
 
        $actas=Acta::all();
        return view('acta.index4')->with('actas',$actas);
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

    public function crear2()
    {   $tipoactas = TipoActa::all();
        return view('acta.create2')->with('tipoactas',$tipoactas);
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
        $actas->lugar=$request->get('lugar');
        $actas->hora=$request->get('hora');
        $actas->fecha=$request->get('fecha');
        $actas->relevancia=$request->get('relevancia');
        $actas->hr=$request->get('hr');
       
            $archivo=$request->file('scan');
            $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
            $actas->scan=$archivo->getClientOriginalName();
    
                
        $actas->save();

        return redirect ('actas');
    }

    public function otro2(Request $request)
    {
        $actas = new Acta();

        $actas->id_tipo=$request->get('id_tipo');
        $actas->tema=$request->get('tema');
        $actas->lugar=$request->get('lugar');
        $actas->hora=$request->get('hora');
        $actas->fecha=$request->get('fecha');
        $actas->relevancia=$request->get('relevancia');
        $actas->hr=$request->get('hr');
       
            $archivo=$request->file('scan');
            $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
            $actas->scan=$archivo->getClientOriginalName();
    
                
        $actas->save();

        return redirect ('registroReuniones');
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

        $acta->id_tipo=$request->get('id_tipo');
        $acta->tema=$request->get('tema');
        $acta->lugar=$request->get('lugar');
        $acta->hora=$request->get('hora');
        $acta->fecha=$request->get('fecha');
        $acta->relevancia=$request->get('relevancia');
        $acta->hr=$request->get('hr');

        $archivo=$request->file('scan');
        $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
        $acta->scan=$archivo->getClientOriginalName();

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
