<?php

namespace App\Http\Controllers;

use App\Models\presupuesto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class presupuestosController extends Controller
{
    public function index()
    {

        //$presupuestos = presupuesto::all();
        $presupuestos = DB::table('presupuestos')
            ->join('clients', 'clients.id', '=', 'presupuestos.idCliente')
            ->join('tarifas', 'presupuestos.idTarifa', '=', 'tarifas.idTarifa')
            ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
            ->select('presupuestos.idPresupuesto', 'clients.id', 'presupuestos.created_at', 
                'clients.alias', 'clients.nombre', 'clients.apellido1', 'clients.apellido2', 
                'clients.telefono', 'clients.poblacion', DB::raw('sum(tarifas.cuota) as cuotaTotal'), 
                DB::raw('sum(servicios.tipo = "fibra") as fibra'), 'servicios.descripcionServicio',
                DB::raw('sum(servicios.tipo = "movil") as movil'))
            ->orderBy('clients.id', 'desc')
            ->groupByRaw('clients.id')
            ->get();

        // $presupuestos = DB::table('presupuestos')
        //                 ->join('clients', 'clients.id', '=', 'presupuestos.idCliente')
        //                 ->join('tarifas', 'presupuestos.idTarifa', '=', 'tarifas.idTarifa')
        //                 ->orderBy('presupuestos.id', 'desc')
        //                 ->get();

        // return $presupuestos;
        return view('presupuestos.index', compact('presupuestos'));
    }

    public function create()
    {
        $presupuestos = DB::table('presupuestos')
            ->join('clients', 'clients.id', '=', 'presupuestos.idCliente')
            ->join('tarifas', 'presupuestos.idTarifa', '=', 'tarifas.idTarifa')
            ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
            ->get();

        $operadores = DB::table('operadores')
            ->get();

        $servicios = DB::table('servicios')
            ->get();

        $tarifas = DB::table('tarifas')
            ->get();
        $clients = DB::table('clients')
            ->get();

        return view('presupuestos.create', compact('presupuestos', 'operadores', 'servicios', 'tarifas', 'clients'));
    }

    public function store(Request $request)
    {

        $presupuesto = new presupuesto();

        //$presupuesto->numpresupuesto = $request->numpresupuesto;
        $presupuesto->idTarifa = $request->idTarifa;
        $presupuesto->idCliente  = $request->idCliente;
        //$presupuesto->estado = $request->estado;
        //$presupuesto->fecha = $request->fecha;
        $presupuesto->poblacionPre = $request->poblacionPre;
        $presupuesto->usuario = $request->usuario;
        $presupuesto->linea = $request->linea;
        $presupuesto->opactual = $request->opactual;
        $presupuesto->cuotaactual = $request->cuotaactual;
        $presupuesto->finpermanencia = $request->finpermanencia;
        $presupuesto->texto_fijo = "MOVY.ES no se hace responbsable bla. Validez bla";
        $presupuesto->textolibre = $request->textolibre;

        $presupuesto->save();
        // return $request->all();
        // return view("presupuestos.show");
        return redirect()->route("presupuestos.index");
    }

    public function show(presupuesto $presupuesto)
    {
        // compact('presupuesto') = ['presupuesto' => $presupuesto]
        return view('presupuestos.show', compact('presupuesto'));
    }

    public function edit(presupuesto $presupuesto)
    {
        
        return view('presupuestos.edit', compact('presupuestos'));
    }

    public function update(Request $request, presupuesto $presupuesto)
    {

        $presupuesto->numpresupuesto = $request->numpresupuesto;
        $presupuesto->idTarifa = $request->idTarifa;
        $presupuesto->idCliente  = $request->idCliente;
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
