<?php

namespace App\Http\Controllers;

use App\Models\colaboradores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColaboradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $colaboradores = DB::table('colaboradores')
        // ->orderBy('idColaborador', 'desc')
        // ->get();
        $colaboradores = colaboradores::all();

        return view('gestion.colaboradores.index', compact('colaboradores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gestion.colaboradores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $colaboradores = new colaboradores();

        $colaboradores->dni = $request->dni;
        $colaboradores->nombre = $request->nombre;
        $colaboradores->apellido1 = $request->apellido1;
        $colaboradores->apellido2 = $request->apellido2;
        $colaboradores->alias = $request->alias;
        $colaboradores->direccion = $request->direccion;
        $colaboradores->telefono = $request->telefono;
        $colaboradores->email = $request->email;
        $colaboradores->cuenta = $request->cuenta;
        $colaboradores->tipo = $request->tipo;
        $colaboradores->activo = $request->activo;

        $colaboradores->save();

        return redirect()->route('gestion.colaboradores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\colaboradores  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function show(colaboradores $colaboradores)
    {
        //
        return view('gestion.colaboradores.show', compact('colaboradores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\colaboradores  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function edit(colaboradores $colaboradores)
    {
        //
        return view('gestion.colaboradores.edit', compact('colaboradores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\colaboradores  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, colaboradores $colaboradores)
    {
        //
        $colaboradores->dni = $request->dni;
        $colaboradores->nombre = $request->nombre;
        $colaboradores->apellido1 = $request->apellido1;
        $colaboradores->apellido2 = $request->apellido2;
        $colaboradores->alias = $request->alias;
        $colaboradores->direccion = $request->direccion;
        $colaboradores->telefono = $request->telefono;
        $colaboradores->email = $request->email;
        $colaboradores->cuenta = $request->cuenta;
        $colaboradores->tipo = $request->tipo;
        $colaboradores->activo = $request->activo;

        $colaboradores->save();

        return view('gestion.colaboradores.show', compact('colaboradores'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\colaboradores  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function destroy(colaboradores $colaboradores)
    {
        //
    }
}
