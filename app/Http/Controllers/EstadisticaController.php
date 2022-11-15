<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acta;
use App\Models\Actor;
use App\Models\Actorgamea;
use PhpParser\Node\Stmt\Foreach_;

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

        foreach ($actoresGamea as  $actorGamea) {
            $actoresGamea = Actor::where('id_gamea',$actorGamea->id)->get();            
        }


        $actoresGamea = Actor::where('id_gamea',20)->get();

        $actoresGamea2 = $actoresGamea->count();

        $count = $actores2->countBy(function ($item) {
            return $item['id_gamea'];
        });

        

        foreach ($count as $key => $value) {
            $actoresGamea3 = Actorgamea::where('id',$key)->get(); 
        }


   
        return view('estadistica.index')->with('actas',$actas)->with('actores',$actores)->with('count',$count)->with('actoresGamea2',$actoresGamea2);
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
