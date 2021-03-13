
@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
    <h1>Crear Cliente</h1>
@stop

@section('content')
    <form action="{{route('crear')}}" method="POST">
        @csrf
        <div class="input-group">
            <div>
                <label class="control-label"> DNI</label>
                <input  type="text" name="dni" placeholder="DNI" class="form-control mb-2" required>
            </div>
            <div>
                <label class="control-label"> Nombre</label>
                <input style="margin-left: 5%" type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" required>
            </div>
        </div>
        <div class="input-group" style="margin-top: 1%">
            <div>
                <label class="control-label"> Primer Apellido</label>
                <input type="text" name="apellido1" placeholder="Primer Apellido" class="form-control mb-2" required>
            </div>
            <div>
                <label class="control-label"> Segundo Apellido</label>    
                <input style="margin-left: 5%"  type="text" name="apellido2" placeholder="Segundo Apellido" class="form-control mb-2" required>
            </div>
        </div>
        <div class="input-group" style="margin-top: 1%">
            <div>
                <label class="control-label"> Alias</label>
                <input type="text" name="alias" placeholder="Alias" class="form-control mb-2">
            </div>
            <div>
                <label class="control-label"> Fecha de Nacimiento</label>
                <input style="margin-left: 5%" type="date" name="fecha_nacimiento" class="form-control mb-2" required>
            </div>
        </div>
        <div class="input-group" style="margin-top: 1%">
            <div>
                <label class="control-label"> Telefono</label>
                <input type="tel" name="telefono" required placeholder="Telefono de Contacto" maxlength="9" pattern="[6-7-9]{1}[0-9]{8}" class="form-control mb-2">
            </div>
            <div>
                <label class="control-label"> Email</label>
                <input style="margin-left: 5%" type="email" name="email" required placeholder="Introduce el Email" class="form-control mb-2">
            </div>
        </div>
        <div class="input-group" style="margin-top: 1%">
            <div>
                <label class="control-label"> Dirección</label>
                <input size="50%" type="text" name="direccion" placeholder="Dirección" class="form-control mb-2" required> 
            </div>
        </div>
        <div class="input-group" style="margin-top: 1%">
            <div>
                <label class="control-label"> Población</label>
                <input  type="text" name="poblacion" placeholder="Poblacion" class="form-control mb-2" required>
            </div>
            <div>
                <label class="control-label"> Código Postal</label>
                <input style="margin-left: 5%" type="text" class="form-control" name="c_postal" value="" data-rule-number="true" maxlength="5" placeholder="Escribe un Código Postal Válido" required/>
            </div>
        </div>
        <div class="input-group" style="margin-top: 1%">
            <div class="form-group f98 required inline" data-fid="f98" name="idioma">
                <label class="control-label" for="f98">Idioma</label>
            <div class="radio">
                    <input  id="f97_1" name="idioma"  type="radio" value="espanyol">
                    <label  for="f97_1">
                        Español
                    </label><br>
                    <input  id="f97_2" name="idioma"  type="radio" value="valenciano"  >
                    <label  for="f97_2">
                        Valenciano
                    </label><br>
                    <input  id="f97_3" name="idioma"  type="radio" value="ingles"  >
                    <label  for="f97_3">
                        Ingles
                    </label>
                </div>
            </div>
            <div style="margin-left: 5%" class="form-group f98 required inline" data-fid="f98" name="segmento">
                <label class="control-label" for="f98">Segmento</label>
            <div class="radio">
                    <input  id="f97_1" name="segmento"  type="radio" value="residencial">
                    <label  for="f97_1">
                        Residencial
                    </label><br>
                    <input  id="f97_2" name="segmento"  type="radio" value="especial"  >
                    <label  for="f97_2">
                        Especial
                    </label><br>
                    <input  id="f97_3" name="segmento"  type="radio" value="autonomo"  >
                    <label  for="f97_3">
                        Autónomo
                    </label><br>
                    <input  id="f97_4" name="segmento"  type="radio" value="empresa"  >
                    <label  for="f97_4">
                        Empresa
                    </label>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Agregar</button>
        </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
