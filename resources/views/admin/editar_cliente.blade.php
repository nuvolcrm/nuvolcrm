<?php

use Illuminate\Support\Facades\DB;

$clientes = DB::table('clientes')->get();
?>
@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
<h1>Editar Cliente</h1>
@stop

@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">

                    <form action="{{route('crear')}}/{{$clientes -> dni}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input-group">
                            <div>
                                <label class="control-label"> DNI</label>
                                <input type="text" name="dni" value="{{$row -> dni}}" class="form-control mb-2">
                            </div>
                            <div>
                                <label class="control-label"> Nombre</label>
                                <input style="margin-left: 5%" type="text" name="nombre" placeholder="" class="form-control mb-2">
                            </div>
                        </div>
                        <div class="input-group" style="margin-top: 1%">
                            <div>
                                <label class="control-label"> Primer Apellido</label>
                                <input type="text" name="apellido1" placeholder="" class="form-control mb-2">
                            </div>
                            <div>
                                <label class="control-label"> Segundo Apellido</label>
                                <input style="margin-left: 5%" type="text" name="apellido2" placeholder="" class="form-control mb-2">
                            </div>
                        </div>
                        <div class="input-group" style="margin-top: 1%">
                            <div>
                                <label class="control-label"> Alias</label>
                                <input type="text" name="alias" placeholder="" class="form-control mb-2">
                            </div>
                            <div>
                                <label class="control-label"> Fecha de Nacimiento</label>
                                <input style="margin-left: 5%" type="date" name="fecha_nacimiento" class="form-control mb-2" placeholder="">
                            </div>
                        </div>
                        <div class="input-group" style="margin-top: 1%">
                            <div>
                                <label class="control-label"> Telefono</label>
                                <input type="tel" name="telefono" placeholder="" maxlength="9" pattern="[6-7-9]{1}[0-9]{8}" class="form-control mb-2">
                            </div>
                            <div>
                                <label class="control-label"> Email</label>
                                <input style="margin-left: 5%" type="email" name="email" placeholder="" class="form-control mb-2">
                            </div>
                        </div>
                        <div class="input-group" style="margin-top: 1%">
                            <div>
                                <label class="control-label"> Dirección</label>
                                <input size="50%" type="text" name="direccion" placeholder="" class="form-control mb-2">
                            </div>
                        </div>
                        <div class="input-group" style="margin-top: 1%">
                            <div>
                                <label class="control-label"> Población</label>
                                <input type="text" name="poblacion" placeholder="" class="form-control mb-2">
                            </div>
                            <div>
                                <label class="control-label"> Código Postal</label>
                                <input style="margin-left: 5%" type="text" class="form-control" name="c_postal" value="" data-rule-number="true" maxlength="5" />
                            </div>
                        </div>
                        <div class="input-group" style="margin-top: 1%">
                            <div class="form-group f98 required inline" data-fid="f98" name="idioma">
                                <label class="control-label" for="f98">Idioma</label>
                                <div class="radio">

                                    <input id="f97_1" name="idioma" type="radio" value="espanyol" selected>
                                    <label for="f97_1">
                                        Español
                                    </label><br>
                                    <input id="f97_2" name="idioma" type="radio" value="valenciano">
                                    <label for="f97_2">
                                        Valenciano
                                    </label><br>
                                    <input id="f97_3" name="idioma" type="radio" value="ingles">
                                    <label for="f97_3">
                                        Ingles
                                    </label>
                                </div>
                            </div>
                            <div style="margin-left: 5%" class="form-group f98 required inline" data-fid="f98" name="segmento">
                                <label class="control-label" for="f98">Segmento</label>
                                <div class="radio">
                                    <input id="f98_1" name="segmento" type="radio" value="residencial">
                                    <label for="f98_1">
                                        Residencial
                                    </label><br>
                                    <input id="f98_2" name="segmento" type="radio" value="especial">
                                    <label for="f98_2">
                                        Especial
                                    </label><br>
                                    <input id="f98_3" name="segmento" type="radio" value="autonomo">
                                    <label for="f98_3">
                                        Autónomo
                                    </label><br>
                                    <input id="f98_4" name="segmento" type="radio" value="empresa">
                                    <label for="f98_4">
                                        Empresa
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Guardar cambios</button>
                        </div>
                    </form>
<div class="row">
<div class="col-12">
<!-- /.card -->
<div class="card">
<!-- /.card-header -->
<div class="card-body">

    <form action="{{route('editar')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group">
            <div>
                <label class="control-label"> DNI</label>
                <input  type="text" name="dni" value="" class="form-control mb-2">
            </div>
            <div>
                <label class="control-label"> Nombre</label>
                <input style="margin-left: 5%" type="text" name="nombre" placeholder="" class="form-control mb-2">
            </div>
        </div>
        <div class="input-group" style="margin-top: 1%">
            <div>
                <label class="control-label"> Primer Apellido</label>
                <input type="text" name="apellido1" placeholder="" class="form-control mb-2" >
            </div>
            <div>
                <label class="control-label"> Segundo Apellido</label>    
                <input style="margin-left: 5%"  type="text" name="apellido2" placeholder="" class="form-control mb-2">
            </div>
        </div>
        <div class="input-group" style="margin-top: 1%">
            <div>
                <label class="control-label"> Alias</label>
                <input type="text" name="alias" placeholder="" class="form-control mb-2">
            </div>
            <div>
                <label class="control-label"> Fecha de Nacimiento</label>
                <input style="margin-left: 5%" type="date" name="fecha_nacimiento" class="form-control mb-2" placeholder="">
            </div>
        </div>
        <div class="input-group" style="margin-top: 1%">
            <div>
                <label class="control-label"> Telefono</label>
                <input type="tel" name="telefono" placeholder="" maxlength="9" pattern="[6-7-9]{1}[0-9]{8}" class="form-control mb-2">
            </div>
            <div>
                <label class="control-label"> Email</label>
                <input style="margin-left: 5%" type="email" name="email" placeholder="" class="form-control mb-2">
            </div>
        </div>
        <div class="input-group" style="margin-top: 1%">
            <div>
                <label class="control-label"> Dirección</label>
                <input size="50%" type="text" name="direccion" placeholder="" class="form-control mb-2"> 
            </div>
        </div>
        <div class="input-group" style="margin-top: 1%">
            <div>
                <label class="control-label"> Población</label>
                <input  type="text" name="poblacion" placeholder="" class="form-control mb-2">
            </div>
            <div>
                <label class="control-label"> Código Postal</label>
                <input style="margin-left: 5%" type="text" class="form-control" name="c_postal" value="" data-rule-number="true" maxlength="5"/>
            </div>
        </div>
        <div class="input-group" style="margin-top: 1%">
            <div class="form-group f98 required inline" data-fid="f98" name="idioma">
                <label class="control-label" for="f98">Idioma</label>
            <div class="radio">

                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Guardar cambios</button>
        </div>
    </form>

    </div>
    </div>
</div>
</div>
</section>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop