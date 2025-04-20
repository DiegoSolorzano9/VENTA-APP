<?php

namespace App\Http\Controllers;

use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class TipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipodocumentos = TipoDocumento::all();
        return view('TipoDocumento.index', [
           'tipodocumentos' => $tipodocumentos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TipoDocumento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);
        

        TipoDocumento::create($request->all());

        return redirect()->route('tipodocumentos.index')
            ->with('success', 'Tipo documento creado correctamente.');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoDocumento $tipoDocumento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoDocumento $tipodocumento)
    {
        return view('TipoDocumento.edit',[
            'tipodocumento' => $tipodocumento,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoDocumento $tipodocumento)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $tipodocumento->update($request->all());

        return redirect()->route('tipodocumentos.index')
            ->with('success', 'Tipo documento actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoDocumento $tipodocumento)
    {
        $tipodocumento->delete();

        return redirect()->route('tipodocumentos.index')
            ->with('success', 'Tipo documento eliminado correctamente.');
    }
    
}
