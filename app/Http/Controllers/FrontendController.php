<?php

namespace App\Http\Controllers;

use App\Models\fibra;
use App\Models\moviles;
use App\Models\fibras_moviles;
use App\Models\resenas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        //
        $fibras = fibra::all();
        $moviles = moviles::all();
        $fibras_moviles = fibras_moviles::all();

        return view('frontend.index', compact('fibras','moviles','fibras_moviles'));
    }
    public function create()
    {
        //
        return view('frontend.create');
    }
    public function create1()
    {
        //
        return view('frontend.create1');
    }
    public function create2()
    {
        //
        return view('frontend.create2');
    }
    public function edit($id)
    {
        //
        $fibras_moviles = fibras_moviles::findOrFail($id);
        return view('frontend.edit', compact('fibras_moviles'));
    }
    public function edit1($id)
    {
        //
        $fibra = fibra::findOrFail($id);
        return view('frontend.edit1', compact('fibra'));
    }
    public function edit2($id)
    {
        //
        $moviles = moviles::findOrFail($id);
        return view('frontend.edit2', compact('moviles'));
    }
    public function store(Request $request)
    {
            $fibras_moviles = DB::table('fibras_moviles')->get();
        //Recoger Datos
        $fibra_movil = array("titulo"=>$request->input("titulo"),
                        "descripcion1"=>$request->input("descripcion1"),
                        "descripcion2"=>$request->input("descripcion2"),
                        "descripcion3"=>$request->input("descripcion3"),
                        "descripcion4"=>$request->input("descripcion4"),
                        "precio"=>$request->input("precio"));

        $fibras_moviles = new fibras_moviles();
        $fibras_moviles->titulo = $fibra_movil["titulo"];
        $fibras_moviles->descripcion1 = $fibra_movil["descripcion1"];
        $fibras_moviles->descripcion2 = $fibra_movil["descripcion2"];
        $fibras_moviles->descripcion3 = $fibra_movil["descripcion3"];
        $fibras_moviles->descripcion4 = $fibra_movil["descripcion4"];
        $fibras_moviles->precio = $fibra_movil["precio"];

        $fibras_moviles->save();
        return view("frontend.index");
    }
    public function store1(Request $request)
    {
            $fibras = DB::table('fibras')->get();
        //Recoger Datos
        $fibra= array("titulo"=>$request->input("titulo"),
                        "descripcion1"=>$request->input("descripcion1"),
                        "descripcion2"=>$request->input("descripcion2"),
                        "descripcion3"=>$request->input("descripcion3"),
                        "descripcion4"=>$request->input("descripcion4"),
                        "precio"=>$request->input("precio"));

        $fibras = new fibra();
        $fibras->titulo = $fibra["titulo"];
        $fibras->descripcion1 = $fibra["descripcion1"];
        $fibras->descripcion2 = $fibra["descripcion2"];
        $fibras->descripcion3 = $fibra["descripcion3"];
        $fibras->descripcion4 = $fibra["descripcion4"];
        $fibras->precio = $fibra["precio"];

        $fibras->save();
        return view("frontend.index");
    }
    public function store2(Request $request)
    {
            $moviles = DB::table('moviles')->get();
        //Recoger Datos
        $movil = array("titulo"=>$request->input("titulo"),
                        "descripcion1"=>$request->input("descripcion1"),
                        "descripcion2"=>$request->input("descripcion2"),
                        "descripcion3"=>$request->input("descripcion3"),
                        "descripcion4"=>$request->input("descripcion4"),
                        "precio"=>$request->input("precio"));

        $moviles = new moviles();
        $moviles->titulo = $movil["titulo"];
        $moviles->descripcion1 = $movil["descripcion1"];
        $moviles->descripcion2 = $movil["descripcion2"];
        $moviles->descripcion3 = $movil["descripcion3"];
        $moviles->descripcion4 = $movil["descripcion4"];
        $moviles->precio = $movil["precio"];

        $moviles->save();
        return view("frontend.index");
    }
    public function update(Request $request, fibras_moviles $fibras_moviles)
    {
        //
        $fibras_moviles->titulo = $request->titulo;
        $fibras_moviles->descripcion1 = $request->descripcion1;
        $fibras_moviles->descripcion2 = $request->descripcion2;
        $fibras_moviles->descripcion3 = $request->descripcion3;
        $fibras_moviles->descripcion4 = $request->descripcion4;
        $fibras_moviles->precio = $request->precio;
        
        $fibras_moviles->save();

        return view('frontend.index', compact('fibras_moviles'));
    }
    public function update1(Request $request, fibra $fibra)
    {
        //
        $fibra->titulo = $request->titulo;
        $fibra->descripcion1 = $request->descripcion1;
        $fibra->descripcion2 = $request->descripcion2;
        $fibra->descripcion3 = $request->descripcion3;
        $fibra->descripcion4 = $request->descripcion4;
        $fibra->precio = $request->precio;
        
        $fibra->save();

        return view('frontend.index', compact('fibra'));
    }
    public function update2(Request $request, moviles $moviles)
    {
        //
        $moviles->titulo = $request->titulo;
        $moviles->descripcion1 = $request->descripcion1;
        $moviles->descripcion2 = $request->descripcion2;
        $moviles->descripcion3 = $request->descripcion3;
        $moviles->descripcion4 = $request->descripcion4;
        $moviles->precio = $request->precio;
        
        $moviles->save();

        return view('frontend.index', compact('moviles'));
    }
    public function destroy($id)
    {
        //
        $fibras_moviles = fibras_moviles::findOrFail($id);
        $fibras_moviles->delete();
        return view('frontend.index');
    }
    public function destroy1($id)
    {
        //
        $fibra = fibra::findOrFail($id);
        $fibra->delete();
        return view('frontend.index');
    }
    public function destroy2($id)
    {
        //
        $moviles = moviles::findOrFail($id);
        $moviles->delete();
        return view('frontend.index');
    }
    public function create_resenas()
    {
        //
        return view('frontend.create_resenas');
    }
    public function store_resenas(Request $request)
    {
            $resenas = DB::table('resenas')->get();
        //Recoger Datos
        $resena = array("nombre"=>$request->input("nombre"),
                        "descripcion"=>$request->input("descripcion"),
                        "foto"=>$request->input("foto"));

        $resenas = new resenas();
        $resenas->nombre = $resena["nombre"];
        $resenas->descripcion = $resena["descripcion"];
        $resenas->foto = $resena["foto"];

        $resenas->save();
        return view("frontend.index");
    }
    public function edit_resenas($id)
    {
        //
        $resenas = resenas::findOrFail($id);
        return view('frontend.edit_resenas', compact('resenas'));
    }
    public function update_resenas(Request $request, resenas $resenas)
    {
        //
        $resenas->nombre = $request->nombre;
        $resenas->descripcion = $request->descripcion;
        $resenas->foto = $request->foto;
        
        $resenas->save();

        return view('frontend.index', compact('resenas'));
    }
    public function destroy_resenas($id)
    {
        //
        $resenas = resenas::findOrFail($id);
        $resenas->delete();
        return view('frontend.index');
    }
}
