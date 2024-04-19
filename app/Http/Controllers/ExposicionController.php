<?php

namespace App\Http\Controllers;

use App\Models\Exposicion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExposicionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exposiciones = DB::table('exposiciones')
        ->join('obrasdearte', 'obrasdearte.id', '=', 'exposiciones.obra_id')
        ->select('exposiciones.*','obrasdearte.titulo' )
        ->get();
        return view('exposicion.index', ['exposiciones' => $exposiciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $obras = DB::table('obrasdearte')
        ->orderBy('titulo')
        ->get();
        return view('exposicion.new', ['obras' => $obras]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $expo = new Exposicion();
        $expo->id = $request->id;
        $expo->obra_id = $request->code;
        $expo->fecha_inicio = $request->fecha_inicio;
        $expo->fecha_fin = $request->fecha_fin;
        $expo->ubicacion = $request->ubicacion;
        $expo->nombre_evento = $request->evento; 
        $expo->save();

        $exposiciones = DB::table('exposiciones')
        ->join('obrasdearte', 'obrasdearte.id', '=', 'exposiciones.obra_id')
        ->select('exposiciones.*','obrasdearte.titulo' )
        ->get();
        return view('exposicion.index', ['exposiciones' => $exposiciones]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $exposicion = Exposicion::find($id);
        $obras = DB::table('obrasdearte')
        ->orderBy('nombre')
        ->get();
        return view('exposicion.edit', ['exposicion' => $exposicion, 'obras' => $obras]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $expo = Exposicion::find($id); 
        $expo->obra_id = $request->code;
        $expo->fecha_inicio = $request->fecha_inicio;
        $expo->fecha_fin = $request->fecha_fin;
        $expo->ubicacion = $request->ubicacion;
        $expo->nombre_evento = $request->evento; 
        $expo->save();
        $exposiciones = DB::table('exposiciones')
        ->join('obrasdearte', 'obrasdearte.id', '=', 'exposiciones.obra_id')
        ->select('exposiciones.*','obrasdearte.titulo' )
        ->get();
        return view('exposicion.index', ['exposiciones' => $exposiciones]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $expo = Exposicion::find($id);
        $expo->delete();

        $exposiciones = DB::table('exposiciones')
        ->join('obrasdearte', 'obrasdearte.id', '=', 'exposiciones.obra_id')
        ->select('exposiciones.*','obrasdearte.titulo' )
        ->get();
        return view('exposicion.index', ['exposiciones' => $exposiciones]);
    }
}
