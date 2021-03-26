<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class clientsController extends Controller
{
    
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = DB::table('clients')->get();

        return view('/clients', ['clients' => $clients]);
    }
    public function store(Request $request){

        $clients = DB::table('clients')->get();
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

        $clients = new Cliente();
        $clients->dni = $cliente["dni"];
        $clients->nombre = $cliente["nombre"];
        $clients->apellido1 = $cliente["apellido1"];
        $clients->apellido2 = $cliente["apellido2"];
        $clients->alias = $cliente["alias"];
        $clients->fecha_nacimiento = $cliente["fecha_nacimiento"];
        $clients->direccion = $cliente["direccion"];
        $clients->poblacion = $cliente["poblacion"];
        $clients->telefono = $cliente["telefono"];
        $clients->idioma = $cliente["idioma"];
        $clients->email = $cliente["email"];
        $clients->segmento = $cliente["segmento"];

        $clients->save();

        return view("admin.clients");
    }
    public function edit($dni){
        $cliente = clients::find($dni);
        return view('admin.editar_cliente')->with('clients',$cliente);
    }
    public function update(Request $request, Cliente $clients)
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
        $clients = Cliente::findOrFail($clients->id);

        $clients->dni = request('dni');
        $clients->nombre = request('nombre');
        $clients->apellido1 = request('apellido1');
        $clients->apellido2 = request('apellido2');
        $clients->alias = request('alias');
        $clients->fecha_nacimiento = request('fecha_nacimiento');
        $clients->telefono = request('telefono');
        $clients->email = request('email');
        $clients->direccion = request('direccion');
        $clients->poblacion = request('poblacion');
        $clients->idioma = request('idioma');
        $clients->segmento = request('segmento');


        $clients->save();

        return view("admin.clients");
    }
}
