<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClient;

class clientController extends Controller
{
    public function index(){

        $clients = Client::all();

        return view('clients.index', compact('clients'));
    }

    public function create(){
        return view('clients.create');
    }

    public function store(request $request){

        // validar formulario (StoreClient valida el formulario)
        // $request->validate([
        //     'dni' => 'required',
        //     'caduca' => 'required',
        //     'nombre' => 'required',
        //     'apellido1' => 'required',
        //     'apellido2' => '',
        //     'alias' => 'required',
        //     'keywords' => 'required',
        //     'cuenta' => 'required',
        //     'fecha_nacimiento' => 'required',
        //     'direccion' => 'required',
        //     'codigoPostal' => 'required',
        //     'poblacion' => 'required',
        //     'telefono' => 'required',
        //     'idioma' => 'required',
        //     'email' => 'required',
        //     'mailing' => 'required',
        //     'segmento' => 'required'
        // ]);

        $client = new Client();

        $client->dni = $request->dni;
        $client->caduca = $request->caduca;
        $client->nombre = $request->nombre;
        $client->apellido1 = $request->apellido1;
        $client->apellido2 = $request->apellido2;
        $client->alias = $request->alias;
        $client->keywords = $request->keywords;
        $client->cuenta = $request->cuenta;
        $client->fecha_nacimiento = $request->fecha_nacimiento;
        $client->direccion = $request->direccion;
        $client->codigoPostal = $request->codigoPostal;
        $client->poblacion = $request->poblacion;
        $client->telefono = $request->telefono;
        $client->idioma = $request->idioma;
        $client->email = $request->email;
        $client->mailing = $request->mailing;
        $client->segmento = $request->segmento;

        $client->save();
        // return $request->all();
        // $client = Client::create($request->all());

        // return view("clients.show");
        return redirect()->route("clients.index");
    }

    public function show(client $client){

        //$client = Client::find($client);
 
        // compact('client') = ['client' => $client]
        return view('clients.show', compact('client'));
    }

    public function edit(client $client){

        return view('clients.edit', compact('client'));
        
    }

    public function update(request $request, client $client){

        $client->dni = $request->dni;
        $client->caduca = $request->caduca;
        $client->nombre = $request->nombre;
        $client->apellido1 = $request->apellido1;
        $client->apellido2 = $request->apellido2;
        $client->alias = $request->alias;
        $client->keywords = $request->keywords;
        $client->cuenta = $request->cuenta;
        $client->fecha_nacimiento = $request->fecha_nacimiento;
        $client->direccion = $request->direccion;
        $client->poblacion = $request->poblacion;
        $client->telefono = $request->telefono;
        $client->idioma = $request->idioma;
        $client->email = $request->email;
        $client->mailing = $request->mailing;
        $client->segmento = $request->segmento;
        
        $client->save();

        return view('clients.show', compact('client'));
        //return view('clients.edit', compact('client'));
        
    }
}
