<?php

namespace App\Http\Controllers;

use App\Models\servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiciosController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
            $servicios = DB::table('servicios')
            ->orderBy('idServicio', 'asc')
            ->get();
    
            return view('gestion.servicios.index', compact('servicios'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            $servicios = DB::table('servicios')->get();
    
            return view('gestion.servicios.create', compact('servicios'));
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $servicios = DB::table('servicios')->get();
        //Recoger Datos
        $servicio = array("servicio"=>$request->input("servicio"),
                          "descripcionServicio"=>$request->input("descripcionServicio"),
                          "imagen"=>$request->input("imagen"));

        $servicios = new servicios();
        $servicios->servicio = $servicio["servicio"];
        $servicios->descripcionServicio = $servicio["descripcionServicio"];
        $servicios->imagen = $servicio["imagen"];

        $servicios->save();
        return view("gestion.servicios.index");
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\tarifas  $tarifas
         * @return \Illuminate\Http\Response
         */
        public function show(servicios $servicios)
        {
            //
    
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\tarifas  $tarifas
         * @return \Illuminate\Http\Response
         */
        public function edit(servicios $servicios)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\tarifas  $tarifas
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, servicios $servicios)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\tarifas  $tarifas
         * @return \Illuminate\Http\Response
         */
        public function destroy(servicios $servicios)
        {
            //
        }
    
}
