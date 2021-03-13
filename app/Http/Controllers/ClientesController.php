<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = DB::table('clientes')->get();

        return view('resources.views.admin.clientes', ['clientes' => $clientes]);
    }
    public function store(Request $request){

        //Recoger Datos
        $cliente = array("dni"=>$request->input("dni"),
                          "nombre"=>$request->input("nombre"),
                          "apellido1"=>$request->input("apellido1"),
                          "apellido2"=>$request->input("apellido2"),
                          "alias"=>$request->input("alias"),
                          "fecha_nacimiento"=>$request->input("fecha_nacimiento"),
                          "direccion"=>$request->input("direccion"),
                          "poblacion"=>$request->input("poblacion"),
                          "telefono"=>$request->input("telefono"),
                          "idioma"=>$request->input("idioma"),
                          "email"=>$request->input("email"),
                          "segmento"=>$request->input("segmento"));

        $clientes = new Cliente();
        $clientes->dni = $cliente["dni"];
        $clientes->nombre = $cliente["nombre"];
        $clientes->apellido1 = $cliente["apellido1"];
        $clientes->apellido2 = $cliente["apellido2"];
        $clientes->alias = $cliente["alias"];
        $clientes->fecha_nacimiento = $cliente["fecha_nacimiento"];
        $clientes->direccion = $cliente["direccion"];
        $clientes->poblacion = $cliente["poblacion"];
        $clientes->telefono = $cliente["telefono"];
        $clientes->idioma = $cliente["idioma"];
        $clientes->email = $cliente["email"];
        $clientes->segmento = $cliente["segmento"];

        $clientes->save();

        return redirect("/clientes");
    }
}