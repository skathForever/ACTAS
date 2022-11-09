<?php

namespace App\Http\Controllers;

use App\Models\Acta;
use App\Models\ActorExterno;
use App\Models\ActorGamea;
use App\Models\ActorOrganizacion;
use App\Models\ActorUrbanizacion;
use App\Models\Actor;
use Illuminate\Http\Request;
class ActorController extends Controller
{
    
    function reunionByActa ($id){
        $idActa = $id;
        $reuniones = Actor::where('id_acta',$id)->get();
        return view('acta.index3')->with('reuniones',$reuniones)->with('idActa',$idActa);
        
    }

    

    function actorReunionByActa ($id){

        $acta = Acta::find($id);

        $actoresGamea= ActorGamea::all();
        $actoresExterno = ActorExterno::all();
        $actoresOrganizaicon = ActorOrganizacion::all();
        $actoresUrbanizacion = ActorUrbanizacion::all();
        $actas = Acta::all();
        return view('reunion.create2')->with('actas',$actas)->with('actoresGamea',$actoresGamea)->with('actoresExterno',$actoresExterno)
        ->with('actoresOrganizaicon',$actoresOrganizaicon)->with('actoresUrbanizacion',$actoresUrbanizacion)->with('acta',$acta);


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $reuniones = Actor::all();
        return view('reunion.index')->with('reuniones',$reuniones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actoresGamea= ActorGamea::all();
        $actoresExterno = ActorExterno::all();
        $actoresOrganizaicon = ActorOrganizacion::all();
        $actoresUrbanizacion = ActorUrbanizacion::all();
        $actas = Acta::all();
        return view('reunion.create')->with('actas',$actas)->with('actoresGamea',$actoresGamea)->with('actoresExterno',$actoresExterno)
        ->with('actoresOrganizaicon',$actoresOrganizaicon)->with('actoresUrbanizacion',$actoresUrbanizacion);
    }
    

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reunion = new Actor();

        $reunion->id_gamea=$request->get('id_gamea');
        $reunion->id_externo=$request->get('id_externo');
        $reunion->id_organizacion=$request->get('id_organizacion');
        $reunion->id_urbanizacion=$request->get('id_urbanizacion');
        $reunion->id_acta=$request->get('id_acta');
        $reunion->save();

        return redirect ('actores');
    }

    public function otro(Request $request)
    {
        $reunion = new Actor();

        $reunion->id_gamea=$request->get('id_gamea');
        $reunion->id_externo=$request->get('id_externo');
        $reunion->id_organizacion=$request->get('id_organizacion');
        $reunion->id_urbanizacion=$request->get('id_urbanizacion');
        $reunion->id_acta=$request->get('id_acta');
        $reunion->save();

        $link = "/reunions2/{$reunion->id_acta}/reunionByActa";
        return redirect($link);
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
        $actoresGamea= ActorGamea::all();
        $actoresExterno = ActorExterno::all();
        $actoresOrganizaicon = ActorOrganizacion::all();
        $actoresUrbanizacion = ActorUrbanizacion::all();

        $reunion = Actor::find($id);
        $actas = Acta::all();

        return view('reunion.edit')->with('reunion',$reunion)->with('actas',$actas)
        ->with('actoresGamea',$actoresGamea)->with('actoresExterno',$actoresExterno)
        ->with('actoresOrganizaicon',$actoresOrganizaicon)->with('actoresUrbanizacion',$actoresUrbanizacion);
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
        $reunion=Actor::find($id);
        $reunion->id_gamea=$request->get('id_gamea');
        $reunion->id_externo=$request->get('id_externo');
        $reunion->id_organizacion=$request->get('id_organizacion');
        $reunion->id_urbanizacion=$request->get('id_urbanizacion');
        $reunion->id_acta=$request->get('id_acta');
        $reunion->save();

        return redirect ('actores');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reunion=Actor::find($id);

        $reunion->delete();

        return redirect ('actores');
    }
}
