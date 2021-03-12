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
    public function clientes()
    {
        return view('admin.clientes');
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
    public function crear_clientes()
    {
        return view('admin.crear_clientes');
    }
}
