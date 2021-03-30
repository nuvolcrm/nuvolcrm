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

    public function create()
    {
        return view('ventas.create');
    }

    public function store(Request $request)
    {

        $venta = new venta();

        // $venta->dni = $request->dni;
        // $venta->caduca = $request->caduca;
        // $venta->nombre = $request->nombre;
        // $venta->apellido1 = $request->apellido1;
        // $venta->apellido2 = $request->apellido2;
        // $venta->alias = $request->alias;
        // $venta->keywords = $request->keywords;
        // $venta->cuenta = $request->cuenta;
        // $venta->fecha_nacimiento = $request->fecha_nacimiento;
        // $venta->direccion = $request->direccion;
        // $venta->codigoPostal = $request->codigoPostal;
        // $venta->poblacion = $request->poblacion;
        // $venta->telefono = $request->telefono;
        // $venta->idioma = $request->idioma;
        // $venta->email = $request->email;
        // $venta->mailing = $request->mailing;
        // $venta->segmento = $request->segmento;

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

    public function edit(venta $venta)
    {

        return view('ventas.edit', compact('venta'));
    }

    public function update(Request $request, venta $venta)
    {

        // $venta->dni = $request->dni;
        // $venta->caduca = $request->caduca;
        // $venta->nombre = $request->nombre;
        // $venta->apellido1 = $request->apellido1;
        // $venta->apellido2 = $request->apellido2;
        // $venta->alias = $request->alias;
        // $venta->keywords = $request->keywords;
        // $venta->cuenta = $request->cuenta;
        // $venta->fecha_nacimiento = $request->fecha_nacimiento;
        // $venta->direccion = $request->direccion;
        // $venta->poblacion = $request->poblacion;
        // $venta->telefono = $request->telefono;
        // $venta->idioma = $request->idioma;
        // $venta->email = $request->email;
        // $venta->mailing = $request->mailing;
        // $venta->segmento = $request->segmento;

        $venta->save();

        return view('ventas.show', compact('venta'));
        //return view('ventas.edit', compact('venta'));

    }
}
