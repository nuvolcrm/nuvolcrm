<?php

namespace App\Http\Controllers;

use App\Models\presupuesto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class presupuestosController extends Controller
{
    public function index(){

        //$presupuestos = presupuesto::all();
         $presupuestos = DB::table('presupuestos')
                         ->join('clients', 'clients.id', '=', 'presupuestos.idCliente')
                         ->join('tarifas', 'presupuestos.idTarifa', '=', 'tarifas.idTarifa')
                         ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
                         ->orderBy('presupuestos.idpresupuesto', 'desc')
                         ->get();

        // $presupuestos = DB::table('presupuestos')
        //                 ->join('clients', 'clients.id', '=', 'presupuestos.idCliente')
        //                 ->join('tarifas', 'presupuestos.idTarifa', '=', 'tarifas.idTarifa')
        //                 ->orderBy('presupuestos.id', 'desc')
        //                 ->get();

        // return $presupuestos;
        return view('presupuestos.index', compact('presupuestos'));
    }

    public function create(){
        $presupuestos = DB::table('presupuestos')
                        ->join('clients', 'clients.id', '=', 'presupuestos.idCliente')
                        ->join('tarifas', 'presupuestos.idTarifa', '=', 'tarifas.idTarifa')
                        ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
                        ->get();

        return view('presupuestos.create', compact('presupuestos'));
    }

    public function store(Request $request){

        $presupuesto = new presupuesto();

        $presupuesto->numpresupuesto = $request->numpresupuesto;
        $presupuesto->idTarifa = $request->idTarifa;
        $presupuesto->idCliente  = $request->idCliente ;
        $presupuesto->estado = $request->estado;
        $presupuesto->fecha = $request->fecha;
        $presupuesto->poblacionPre = $request->poblacionPre;
        $presupuesto->usuario = $request->usuario;
        $presupuesto->linea = $request->linea;
        $presupuesto->opactual = $request->opactual;
        $presupuesto->cuotaactual = $request->cuotaactual;
        $presupuesto->finpermanencia = $request->finpermanencia;
        $presupuesto->texto_fijo = $request->texto_fijo;
        $presupuesto->textolibre = $request->textolibre;

        $presupuesto->save();
        // return $request->all();
        // return view("presupuestos.show");
        return redirect()->route("presupuestos.index");
    }

    public function show(presupuesto $presupuesto){

        //$presupuesto = presupuesto::find($presupuesto);
 
        // compact('presupuesto') = ['presupuesto' => $presupuesto]
        return view('presupuestos.show', compact('presupuestos'));
    }

    public function edit(presupuesto $presupuesto){

        return view('presupuestos.edit', compact('presupuestos'));
        
    }

    public function update(Request $request, presupuesto $presupuesto){

        $presupuesto->numpresupuesto = $request->numpresupuesto;
        $presupuesto->idTarifa = $request->idTarifa;
        $presupuesto->idCliente  = $request->idCliente ;
        $presupuesto->estado = $request->estado;
        $presupuesto->fecha = $request->fecha;
        $presupuesto->poblacionPre = $request->poblacionPre;
        $presupuesto->usuario = $request->usuario;
        $presupuesto->linea = $request->linea;
        $presupuesto->opactual = $request->opactual;
        $presupuesto->cuotaactual = $request->cuotaactual;
        $presupuesto->finpermanencia = $request->finpermanencia;
        $presupuesto->texto_fijo = $request->texto_fijo;
        $presupuesto->textolibre = $request->textolibre;
        
        $presupuesto->save();

        return view('presupuestos.show', compact('presupuestos'));
        //return view('presupuestos.edit', compact('presupuesto'));
        
    }
}
