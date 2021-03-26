<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Presupuesto;

class PresupuestosController extends Controller
{
    public function crearPre(Request $request){

        $presupuestos = DB::table('presupuestos')->get();
        //Recoger Datos
        $presupuesto = array("dni"=>$request->input("dni"), 
                            "opactual"=>$request->input("opactual"),
                            "cuotaactual"=>$request->input("cuotaactual"),
                            "finpermanencia"=>$request->input("finpermanencia"),
                            "idTarifa"=>$request->input("idTarifa"),
                            "linea"=>$request->input("linea"),
                            "usuario"=>$request->input("usuario"));

        $presupuestos = new Presupuesto();
        $presupuestos->dni = $presupuesto["dni"];
        $presupuestos->opactual = $presupuesto["opactual"];
        $presupuestos->cuotaactual = $presupuesto["cuotaactual"];
        $presupuestos->finpermanencia = $presupuesto["finpermanencia"];
        $presupuestos->idTarifa = $presupuesto["idTarifa"];
        $presupuestos->linea = $presupuesto["linea"];
        $presupuestos->usuario = $presupuesto["usuario"];

        $presupuestos->save();

        return view("admin.presupuestos");
    }
    function imprimir(){
        $pdf = \PDF::loadView('$presupuestos');
        return $pdf->download('presupuesto.pdf');
    }
}
