<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

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

        return view('/clientes', ['clientes' => $clientes]);
    }
    public function store(Request $request){

        $clientes = DB::table('clientes')->get();
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

        return view("admin.clientes");
    }
    public function edit(Cliente $clientes){
        $clientes = Cliente::find($clientes->idcliente);
        return $clientes;
/*         return view('admin.editar_cliente', compact('cliente'));
 */ }
    public function update(Request $request, Cliente $clientes)
    {
        //validate the file
        /* $data = request()->validate([
            'dni' => 'max:255',
            'nombre' => 'max:255',
            'apellido1' => 'max:255',
            'apellido2' => 'max:255',
            'alias' => 'max:255',
            'fecha_nacimiento' => 'date',
            'telefono' => 'max:255',
            'email' => 'max:255',
            'direccion' => 'max:255',
            'poblacion' => 'max:255',
            'idioma' => 'selected',
            'segmento' => 'selected',
            
        ]); */
        $clientes = Cliente::findOrFail($clientes->idcliente);

        $clientes->dni = request('dni');
        $clientes->nombre = request('nombre');
        $clientes->apellido1 = request('apellido1');
        $clientes->apellido2 = request('apellido2');
        $clientes->alias = request('alias');
        $clientes->fecha_nacimiento = request('fecha_nacimiento');
        $clientes->telefono = request('telefono');
        $clientes->email = request('email');
        $clientes->direccion = request('direccion');
        $clientes->poblacion = request('poblacion');
        $clientes->idioma = request('idioma');
        $clientes->segmento = request('segmento');


        $clientes->save();

        return view("admin.clientes");
    }
}
