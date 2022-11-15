<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acta;
use App\Models\Actor;
use App\Models\Actorexterno;
use App\Models\Actorgamea;
use App\Models\Actororganizacion;
use App\Models\Actorurbanizacion;
use PhpParser\Node\Stmt\Foreach_;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class EstadisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actas = Acta::count();

        $actores = Actor::count();
        
        $actores2 = Actor::all();

        $actoresGamea = Actorgamea::all();

        $actoresUrbanizacion = Actorurbanizacion::all();
        
        $actoresOrganizacion = Actororganizacion::all();

        $actoresExterno = Actorexterno::all();


        $count = $actores2->countBy(function ($item) {
            return $item['id_gamea'];
        });

        
        $count2 = $actores2->countBy(function ($item) {
            return $item['id_urbanizacion'];
        });

        $count3 = $actores2->countBy(function ($item) {
            return $item['id_organizacion'];
        });

        $count4 = $actores2->countBy(function ($item) {
            return $item['id_externo'];
        });

        return view('estadistica.index')->with('actas',$actas)->with('actores',$actores)
        ->with('count',$count)->with('count2',$count2)->with('count3',$count3)->with('count4',$count4)
        ->with('actoresGamea',$actoresGamea)->with('actoresUrbanizacion',$actoresUrbanizacion)
        ->with('actoresOrganizacion',$actoresOrganizacion)->with('actoresExterno',$actoresExterno);
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
        //
    }
}
