<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Presupuesto;

class PresupuestosController extends Controller
{
    public function store(Request $request){

        $presupuestos = DB::table('presupuestos')->get();
        //Recoger Datos
        $presupuesto = array("dni"=>$request->input("dni"),
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

        $presupuestos = new Presupuesto();
        $presupuestos->dni = $presupuesto["dni"];
        $presupuestos->nombre = $presupuesto["nombre"];
        $presupuestos->apellido1 = $presupuesto["apellido1"];
        $presupuestos->apellido2 = $presupuesto["apellido2"];
        $presupuestos->alias = $presupuesto["alias"];
        $presupuestos->fecha_nacimiento = $presupuesto["fecha_nacimiento"];
        $presupuestos->direccion = $presupuesto["direccion"];
        $presupuestos->poblacion = $presupuesto["poblacion"];
        $presupuestos->telefono = $presupuesto["telefono"];
        $presupuestos->idioma = $presupuesto["idioma"];
        $presupuestos->email = $presupuesto["email"];
        $presupuestos->segmento = $presupuesto["segmento"];

        /* $clients->save(); */
        return $presupuestos;

        /* return view("admin.clients"); */
    }
    function imprimir(){
        $pdf = \PDF::loadView('$presupuestos');
        return $pdf->download('presupuesto.pdf');
    }
}
