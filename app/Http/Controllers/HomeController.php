<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function clients()
    {
        return view('admin.clients');
    }
    public function presupuestos()
    {
        return view('admin.presupuestos');
    }
    public function ventas()
    {
        return view('admin.ventas');
    }
    public function pedidos()
    {
        return view('admin.extra.pedidos');
    }
    public function enlaces()
    {
        return view('admin.extra.enlaces');
    }
    public function frecuentes()
    {
        return view('admin.extra.frecuentes');
    }
    public function eliminador()
    {
        return view('admin.extra.eliminador');
    }
    public function operadores()
    {
        return view('admin.gestion.operadores');
    }
    public function servicios()
    {
        return view('admin.gestion.servicios');
    }
    public function tarifas()
    {
        return view('admin.gestion.tarifas');
    }
    public function colaboradores()
    {
        return view('admin.gestion.colaboradores');
    }
    public function usuarios_roles()
    {
        return view('admin.gestion.usuarios_roles');
    }
    public function crear_clients()
    {
        return view('admin.crear_clients');
    }
    public function editar_cliente()
    {
        return view('admin.editar_cliente');
    }
    public function crear_presupuestos()
    {
        return view('admin.crear_presupuestos');
    }

    public function escritorio()
    {
        //
        $top5ingresos = DB::table('ventas')
        ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
        ->join('operadores', 'tarifas.idOperador', '=', 'operadores.idOperador')
        ->orderBy('operadores.idOperador', 'asc')
        ->get(5);

        $top5fibras = DB::table('ventas')
        ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
        ->join('operadores', 'tarifas.idOperador', '=', 'operadores.idOperador')
        // ->whereBetween('ventas.fechaalta', [(1)/{{ date('m') }}/{{ date('Y') }}, {{ date('d') }}/{{ date('m') }}/{{ date('Y') }}])
        ->orderBy('operadores.idOperador', 'asc')
        ->count() //no sé si cuenta los registros o hace sumatorio de fibras
        ->get(5);

        $top5fibras = DB::table('ventas')
        ->count()
        ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
        ->join('operadores', 'tarifas.idOperador', '=', 'operadores.idOperador')
        // ->whereBetween('ventas.fechaalta', [(1)/{{ date('m') }}/{{ date('Y') }}, {{ date('d') }}/{{ date('m') }}/{{ date('Y') }}])
        ->orderBy('operadores.idOperador', 'asc')
        ->get(5);

        return view('gestion.tarifas.index', compact('tarifas'));
    }
}
