<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venta;
use Illuminate\Support\Facades\DB;
use Iluminate\Pagination\Paginator;

class ventasController extends Controller
{
    public function index()
    {
        $ventas = DB::table('ventas')
            ->join('clients', 'clients.id', '=', 'ventas.idCliente')
            ->join('tarifas', 'tarifas.idTarifa', '=', 'ventas.idTarifa')
            ->join('operadores', 'operadores.idOperador', '=', 'tarifas.idOperador')
            ->join('servicios', 'servicios.idServicio', '=', 'tarifas.idServicio')
            ->orderBy('fecha_alta', 'desc')
            //mejor ordenar por fecha_alta, por si grabamos a posteriori una venta más antigua, que se muestre en la fecha que toca.
            ->get();

        return view('ventas.index', compact('ventas'));
    }

    public function colaboradores()
    {
        return view('ventas.create', compact('colaboradores'));
    }

    public function create()
    {
        $ventas = DB::table('ventas')
            ->join('clients', 'clients.id', '=', 'ventas.idCliente')
            ->join('tarifas', 'ventas.idTarifa', '=', 'tarifas.idTarifa')
            ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
            ->get();
        $colaboradores = DB::table('colaboradores')
            ->get();

        $tarifas = DB::table('tarifas')
            ->get();

        return view('ventas.create', compact('ventas', 'colaboradores', 'tarifas'));
    }

    public function store(Request $request)
    {
        $venta = new venta();
        $venta->idCliente  = $request->idCliente ;
        $venta->vendedor = $request->vendedor;
        $venta->idTarifa  = $request->idTarifa ;
        $venta->idColaborador  = $request->idColaborador ;
        $venta->linea = $request->linea;
        $venta->prepago = $request->prepago;
        $venta->fecha_alta = $request->fecha_alta;
        $venta->fecha_activa = $request->fecha_activa;
        $venta->fecha_sale = $request->fecha_sale;
        $venta->tipoalta = $request->tipoalta;
        $venta->libre = $request->libre;
        $venta->cobrado = $request->cobrado;
        $venta->pagado = $request->pagado;
        $venta->comision = $request->comision;
        $venta->extracomision = $request->extracomision;
        $venta->observaciones = $request->observaciones;
        $venta->incidencias = $request->incidencias;
        $venta->usuario = $request->usuario;

        $venta->save();

        // return view("ventas.show");
        return redirect()->route("ventas.index");
    }

    public function show(venta $venta)
    {
        //$venta = venta::find($venta);
        // compact('venta') = ['venta' => $venta]
        return view('ventas.show', compact('venta'));
    }

    public function edit($idVenta)
    {
        $ventas=venta::findOrFail($idVenta); 
        
        return view('ventas.edit', compact('ventas'));
    }

    public function update(Request $request, venta $venta)
    {
        // $venta = venta::find($dni);
        $venta->idCliente  = $request->idCliente ;
        $venta->vendedor = $request->vendedor;
        $venta->idTarifa  = $request->idTarifa ;
        $venta->idColaborador  = $request->idColaborador ;
        $venta->linea = $request->linea;
        $venta->prepago = $request->prepago;
        $venta->fecha_alta = $request->fecha_alta;
        $venta->fecha_activa = $request->fecha_activa;
        $venta->fecha_sale = $request->fecha_sale;
        $venta->tipoalta = $request->tipoalta;
        $venta->libre = $request->libre;
        $venta->cobrado = $request->cobrado;
        $venta->pagado = $request->pagado;
        $venta->comision = $request->comision;
        $venta->extracomision = $request->extracomision;
        $venta->observaciones = $request->observaciones;
        $venta->incidencias = $request->incidencias;
        $venta->usuario = $request->usuario;

        $venta->save();

        return view('ventas.show', compact('venta'));
        //return view('ventas.edit', compact('venta'));
    }
}
