<?php

namespace App\Http\Controllers;

use App\Models\tarifas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarifasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tarifas = DB::table('tarifas')
        ->orderBy('idTarifa', 'desc')
        ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
        ->join('operadores', 'tarifas.idOperador', '=', 'operadores.idOperador')
        ->get();

        return view('gestion.tarifas.index', compact('tarifas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clients = DB::table('clients')->get();
        $tarifas = DB::table('tarifas')->get();
        $presupuestos = DB::table('presupuestos')
                        ->join('clients', 'clients.id', '=', 'presupuestos.idCliente')
                        ->join('tarifas', 'presupuestos.idTarifa', '=', 'tarifas.idTarifa')
                        ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
                        ->get();

        return view('gestion.tarifas.create', compact('clients', 'tarifas', 'presupuestos'));
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
     * @param  \App\Models\tarifas  $tarifas
     * @return \Illuminate\Http\Response
     */
    public function show(tarifas $tarifas)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tarifas  $tarifas
     * @return \Illuminate\Http\Response
     */
    public function edit(tarifas $tarifas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tarifas  $tarifas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tarifas $tarifas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tarifas  $tarifas
     * @return \Illuminate\Http\Response
     */
    public function destroy(tarifas $tarifas)
    {
        //
    }
}
