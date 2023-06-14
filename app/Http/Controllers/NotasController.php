<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notas = Notas::all();   
        // dd('ds');
        return view('notas.index', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $notas=new Notas;
         $notas->titulo = $request->titulo;
         $notas->descripcion = $request->descripcion;
         $notas->save(); 
    //    dd($request);
         return redirect()->route('notas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notas $notas)
    {
        return view('notas.show', compact('notas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notas $notas)
    {
    
        return view('notas.edit', compact('notas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notas $notas)
    {
        $notas=Notas::find($request->id);
        // dd($request->id); 
        $notas->titulo = $request->titulo;
        $notas->descripcion = $request->descripcion;
        $notas->save(); 
        return redirect()->route('notas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($notas)
    {
        Notas::destroy($notas);
        return redirect()->route('notas.index');
    }
}
