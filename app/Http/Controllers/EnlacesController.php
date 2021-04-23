<?php

namespace App\Http\Controllers;

use App\Models\enlaces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $enlaces = DB::table('operadores')
        ->orderBy('orden', 'desc')
        ->get();

        return view('extra.enlaces.index', compact('enlaces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $enlaces = DB::table('operadores')->get();

        return view('extra.enlaces.create', compact('enlaces'));
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
     * @param  \App\Models\enlaces  $enlaces
     * @return \Illuminate\Http\Response
     */
    public function show(enlaces $enlaces)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enlaces  $enlaces
     * @return \Illuminate\Http\Response
     */
    public function edit(enlaces $enlaces)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\enlaces  $enlaces
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enlaces $enlaces)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\enlaces  $enlaces
     * @return \Illuminate\Http\Response
     */
    public function destroy(enlaces $enlaces)
    {
        //
    }

}
