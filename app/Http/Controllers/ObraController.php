<?php

namespace App\Http\Controllers;

use App\Models\ObrasArte;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ObraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obras = DB::table('obrasdearte')
        ->join('artistas', 'obrasdearte.artista_id', '=', 'artistas.id')
        ->select('obrasdearte.*','artistas.nombre' )
        ->get();
        return view('obras.index', ['obras' => $obras]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artistas = DB::table('artistas')
        ->orderBy('nombre')
        ->get();
        return view('obras.new', ['artistas' => $artistas]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obra = new ObrasArte();
        $obra->id = $request->id;
        $obra->artista_id = $request->code;
        $obra->titulo = $request->titulo;
        $obra->año = $request->ano;
        $obra->tecnica = $request->tecnica;
        $obra->dimensiones = $request->dimensiones;
        $obra->descripcion = $request->descripcion;
        $obra->save();

        $obras = DB::table('obrasdearte')
        ->join('artistas', 'obrasdearte.artista_id', '=', 'artistas.id')
        ->select('obrasdearte.*','artistas.nombre' )
        ->get();
        return view('obras.index', ['obras' => $obras]);
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
        $obra = ObrasArte::find($id);
        $artistas = DB::table('artistas')
        ->orderBy('nombre')
        ->get();
        return view('obras.edit', ['obra' => $obra, 'artistas' => $artistas]);    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $obra = ObrasArte::find($id);

        $obra->artista_id = $request->code;
        $obra->titulo = $request->titulo;
        $obra->año = $request->ano;
        $obra->tecnica = $request->tecnica;
        $obra->dimensiones = $request->dimensiones;
        $obra->descripcion = $request->descripcion;
        $obra->save();
        $obras = DB::table('obrasdearte')
        ->join('artistas', 'obrasdearte.artista_id', '=', 'artistas.id')
        ->select('obrasdearte.*','artistas.nombre' )
        ->get();
        return view('obras.index', ['obras' => $obras]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obra = ObrasArte::find($id);
        $obra->delete();
        $obras = DB::table('obrasdearte')
        ->join('artistas', 'obrasdearte.artista_id', '=', 'artistas.id')
        ->select('obrasdearte.*','artistas.nombre' )
        ->get();
        return view('obras.index', ['obras' => $obras]);
    }
}
