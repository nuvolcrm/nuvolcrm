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
        $colaboradores = DB::table('colaboradores')
        // ->orderBy('idColaborador', 'desc')
        ->get();

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
