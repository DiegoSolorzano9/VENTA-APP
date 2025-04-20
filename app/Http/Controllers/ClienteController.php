<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\TipoDocumento;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes= Cliente::all();
        return view('clientes.index', [
           'clientes' => $clientes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos = TipoDocumento::all();
        return view('clientes.create', [
            'tipos' => $tipos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo_documento' => 'required',
            'numero_documento' => 'required|string|max:20',
            'razon_social' => 'required|string|max:200'
        ]);
        

        Cliente::create($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        $tipos = TipoDocumento::all();
        return view('clientes.edit',[
            'cliente' => $cliente,
            'tipos' => $tipos
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'tipo_documento' => 'required',
            'numero_documento' => 'required|string|max:20',
            'razon_social' => 'required|string|max:200'
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'cliente actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente eliminado correctamente.');
    }
}
