@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<h1>Nuevo Cliente</h1>
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

                    <form action="{{route('crear')}}" method="POST">
                        @csrf
                        <div class="input-group">
                            <div class="input-group" style="margin-top: 1%">
                                <div class="form-group required inline" data-fid="f99" name="tipo">
                                    <label class="control-label" for="f99">Tipo</label>
                                    <div class="radio">
                                        <input id="segmento_res" name="segmento" type="radio" value="par">
                                        <label for="segmento_res">
                                            Particular&nbsp;&nbsp;
                                        </label>
                                        <input id="segmento_esp" name="segmento" type="radio" value="esp">
                                        <label for="segmento_esp">
                                            Especial&nbsp;&nbsp;
                                        </label>
                                        <input id="segmento_aut" name="segmento" type="radio" value="aut">
                                        <label for="segmento_aut">
                                            Autónomo&nbsp;&nbsp;
                                        </label>
                                        <input id="segmento_emp" name="segmento" type="radio" value="emp">
                                        <label for="segmento_emp">
                                            Empresa
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="control-label">DNI</label>
                                <input type="text" name="dni" placeholder="DNI" class="form-control mb-2" required>
                            </div>
                            <div>
                                <label class="control-label">Nombre</label>
                                <input style="margin-left: 5px" type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" required>
                            </div>
                        </div>
                        <div class="input-group" style="margin-top: 1%">
                            <div>
                                <label class="control-label">Primer Apellido</label>
                                <input type="text" name="apellido1" placeholder="Primer Apellido" class="form-control mb-2" required>
                            </div>
                            <div>
                                <label class="control-label">Segundo Apellido</label>
                                <input style="margin-left: 5px" type="text" name="apellido2" placeholder="Segundo Apellido" class="form-control mb-2">
                            </div>
                        </div>
                        <div class="input-group" style="margin-top: 1%">
                            <div>
                                <label class="control-label">Alias</label>
                                <input type="text" name="alias" placeholder="Alias" class="form-control mb-2">
                            </div>
                            <div>
                                <label class="control-label">Fecha de nacimiento</label>
                                <input style="margin-left: 5px" type="date" name="fecha_nacimiento" class="form-control mb-2" required>
                            </div>
                        </div>
                        <div class="input-group" style="margin-top: 1%">
                            <div>
                                <label class="control-label">Teléfono</label>
                                <input type="tel" name="telefono" required placeholder="Telefono de Contacto" maxlength="9" pattern="[6-7-9]{1}[0-9]{8}" class="form-control mb-2">
                            </div>
                            <div>
                                <label class="control-label">Email</label>
                                <input style="margin-left: 5px" type="email" name="email" required placeholder="Email" class="form-control mb-2">
                            </div>
                        </div>
                        <div class="input-group" style="margin-top: 1%">
                            <div>
                                <label class="control-label">Dirección</label>
                                <input size="50%" type="text" name="direccion" placeholder="Dirección" class="form-control mb-2" required>
                            </div>
                        </div>
                        <div class="input-group" style="margin-top: 1%">
                            <div>
                                <label class="control-label">Código Postal</label>
                                <input type="text" class="form-control mb-2" name="c_postal" data-rule-number="true" maxlength="5" placeholder="Código Postal" required>
                            </div>
                            <div>
                                <label class="control-label">Población</label>
                                <input type="text" name="poblacion" placeholder="Población" class="form-control mb-2" required>
                            </div>
                            <div class="input-group" style="margin-top: 1%">
                                <div class="form-group f98 required inline" data-fid="f98" name="idioma">
                                    <label class="control-label" for="f98">Idioma</label>
                                    <div class="radio">
                                        <input id="idioma_esp" name="idioma" type="radio" value="esp">
                                        <label for="idioma_esp">
                                            Español &nbsp;&nbsp;
                                        </label>
                                        <input id="idioma_val" name="idioma" type="radio" value="val">
                                        <label for="idioma_val">
                                            Valencià &nbsp;&nbsp;
                                        </label>
                                        <input id="idioma_eng" name="idioma" type="radio" value="eng">
                                        <label for="idioma_eng">
                                            English
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Añadir</button>
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
<script>
    console.log('Hi!');
</script>
@stop