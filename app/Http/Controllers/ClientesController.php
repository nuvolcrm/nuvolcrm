<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        $clientes = DB::table('cliente')->get();

        return view('resources.views.admin.clientes', ['clientes' => $clientes]);
    }
    public function store(Request $request){

        $clientes = array("dni"=>$request->input("dni"),
                          "nombre"=>$request->input("nombre"),
                          "apellido1"=>$request->input("apellido1"),
                          "apellido2"=>$request->input("apellido2"),
                          "alias"=>$request->input("alias"),
                          "fecha_nacimiento"=>$request->input("f_nacimiento"),
                          "direccion"=>$request->input("direccion"),
                          "poblacion"=>$request->input("poblacion"),
                          "telefono"=>$request->input("telefono"),
                          "idioma"=>$request->radio("idioma"),
                          "email"=>$request->input("email"),
                          "segmento"=>$request->radio("segmento"));

        $cliente = new Cliente();
        $clietne->dni = $clientes["dni"];
        $clietne->nombre = $clientes["nombre"];
        $clietne->apellido1 = $clientes["apellido1"];
        $clietne->apellido2 = $clientes["apellido2"];
        $clietne->alias = $clientes["alias"];
        $clietne->fehca_nacimiento = $clientes["f_nacimiento"];
        $clietne->direccion = $clientes["direccion"];
        $clietne->poblacion = $clientes["poblacion"];
        $clietne->telefono = $clientes["telefono"];
        $clietne->idioma = $clientes["idioma"];
        $clietne->email = $clientes["email"];
        $clietne->segmento = $clientes["segmento"];

        $cliente->save();

        return redirect("/clientes")-with("ok-crear","");
    }
}