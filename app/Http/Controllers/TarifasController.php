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
        ->leftJoin('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
        ->leftJoin('operadores', 'tarifas.idOperador', '=', 'operadores.idOperador')
        ->orderBy('operadores.idOperador', 'asc')
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
        // $clients = DB::table('clients')->get();
        $tarifas = DB::table('tarifas')
        ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
        ->join('operadores', 'tarifas.idOperador', '=', 'operadores.idOperador')
        ->distinct('servicios.idServicio')
        ->get();

        $operadores = DB::table('operadores')
        ->distinct()
        ->get();

        $servicios = DB::table('servicios')
        ->distinct()
        ->get();
        // $presupuestos = DB::table('presupuestos')
        //                 ->join('clients', 'clients.id', '=', 'presupuestos.idCliente')
        //                 ->join('tarifas', 'presupuestos.idTarifa', '=', 'tarifas.idTarifa')
        //                 ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
        //                 ->get();

        return view('gestion.tarifas.create', compact('tarifas', 'operadores', 'servicios'));
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
        $Tarifa = new Tarifas();

        $Tarifa->idTarifa = $request->idTarifa;
        $Tarifa->nombreTarifa = $request->nombreTarifa;
        $Tarifa->descripcion = $request->descripcion;
        $Tarifa->descripcion_larga = $request->descripcion_larga;
        $Tarifa->cuota = $request->cuota;
        $Tarifa->datos = $request->datos;
        $Tarifa->llamadas = $request->llamadas;
        $Tarifa->velocidad = $request->velocidad;
        $Tarifa->permanencia = $request->permanencia;
        $Tarifa->comision_portabilidad = $request->comision_portabilidad;
        $Tarifa->comision_nueva = $request->comision_nueva;
        $Tarifa->comision_migra = $request->comision_migra;
        $Tarifa->descatalogado = $request->descatalogado;
        $Tarifa->idServicio = $request->idServicio;
        $Tarifa->idOperador = $request->idOperador;

        $Tarifa->save();
        
        return redirect()->route("gestion.tarifas.index");
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
