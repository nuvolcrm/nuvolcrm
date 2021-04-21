<?php

namespace App\Http\Controllers;

use App\Models\operadores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OperadoresController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
            $operadores = DB::table('operadores')
            ->orderBy('orden', 'desc')
            ->get();
    
            return view('gestion.operadores.index', compact('operadores'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            $operadores = DB::table('operadores')->get();
    
            return view('gestion.operadores.create', compact('operadores'));
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
         * @param  \App\Models\tarifas  $tarifas
         * @return \Illuminate\Http\Response
         */
        public function show(tarifas $tarifas)
        {
            //
    
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\tarifas  $tarifas
         * @return \Illuminate\Http\Response
         */
        public function edit(tarifas $tarifas)
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
        public function update(Request $request, tarifas $tarifas)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\tarifas  $tarifas
         * @return \Illuminate\Http\Response
         */
        public function destroy(tarifas $tarifas)
        {
            //
        }
    
}
