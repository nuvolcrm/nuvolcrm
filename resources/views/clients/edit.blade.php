@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <form action="{{ route('clients.update', $client) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="form-group required inline" data-fid="f99" name="tipo">
                                    <label class="control-label" for="f99">Tipo</label>
                                    <div class="radio">
                                        <input id="segmento_res" name="segmento" type="radio" value="par" @if ($client->segmento == 'par') checked @endif>
                                        Particular&nbsp;&nbsp;
                                        <input id="segmento_esp" name="segmento" type="radio" value="esp" @if ($client->segmento == 'esp') checked @endif>
                                        Especial&nbsp;&nbsp;
                                        <input id="segmento_aut" name="segmento" type="radio" value="aut" @if ($client->segmento == 'aut') checked @endif>
                                        Autónomo&nbsp;&nbsp;
                                        <input id="segmento_emp" name="segmento" type="radio" value="emp" @if ($client->segmento == 'emp') checked @endif>
                                        Empresa
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">DNI</label>
                                <input type="text" name="dni" placeholder="DNI" class="form-control mb-2"
                                    value="{{ old('dni', $client->dni) }}" required>
                                @error('dni')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">Caduca el...</label>
                                <input type="date" name="caduca" class="form-control mb-2"
                                    value="{{ old('caduca', $client->caduca) }}" required>
                                @error('caduca')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">Nombre</label>
                                <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2"
                                    value="{{ old('nombre', $client->nombre) }}" required>
                                @error('nombre')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">Primer Apellido</label>
                                <input type="text" name="apellido1" placeholder="Primer apellido" class="form-control mb-2"
                                    value="{{ old('apellido1', $client->apellido1) }}" required>
                                @error('apellido1')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">Segundo Apellido</label>
                                <input type="text" name="apellido2" placeholder="Segundo apellido"
                                    value="{{ old('apellido2', $client->apellido2) }}" class="form-control mb-2">
                                @error('apellido2')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">Alias</label>
                                <input type="text" name="alias" placeholder="Alias" class="form-control mb-2"
                                    value="{{ old('alias', $client->alias) }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">Fecha de nacimiento</label>
                                <input type="date" name="fecha_nacimiento" class="form-control mb-2"
                                    value="{{ old('fecha_nacimiento', $client->fecha_nacimiento) }}" required>
                                @error('fecha_nacimiento')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">IBAN</label>
                                <input type="iban" name="cuenta" required placeholder="ES..." class="form-control mb-2"
                                    value="{{ old('cuenta', $client->cuenta) }}">
                                @error('cuenta')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">Teléfono</label>
                                <input type="tel" name="telefono" required placeholder="Telefono de Contacto" maxlength="9"
                                    pattern="[6-7-9]{1}[0-9]{8}" value="{{ old('telefono', $client->telefono) }}"
                                    class="form-control mb-2">
                                @error('telefono')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">Email</label>
                                <input type="email" name="email" required placeholder="Email" class="form-control mb-2"
                                    value="{{ old('email', $client->email) }}">
                                @error('email')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 d-flex flex-row">
                            <div>
                                <label class="control-label">Newsletter</label>
                                <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="newsletter" value="1" id="flexCheckDefault" checked>
                                    </div>  -->
                                <input type="checkbox" name="newsletter" class="form-control mb-2" checked>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">Dirección</label>
                                <input type="text" name="direccion" placeholder="Dirección" class="form-control mb-2"
                                    value="{{ old('direccion', $client->direccion) }}" required>
                                @error('direccion')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">Código Postal</label>
                                <input type="text" class="form-control mb-2" name="codigoPostal" data-rule-number="true"
                                    maxlength="5" placeholder="Código Postal"
                                    value="{{ old('codigoPostal', $client->codigoPostal) }}" required>
                                @error('codigoPostal')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">Población</label>
                                <input type="text" name="poblacion" placeholder="Población" class="form-control mb-2"
                                    value="{{ old('poblacion', $client->poblacion) }}" required>
                                @error('poblacion')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group f98 required inline" data-fid="f98" name="idioma">
                                <label class="control-label" for="f98">Idioma</label>
                                <div class="radio">
                                    <input id="idioma_esp" name="idioma" type="radio" value="esp" @if ($client->idioma == 'esp') checked @endif>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Bandera_de_Espa%C3%B1a_%28nuevo_dise%C3%B1o%29.svg"
                                        alt="Español" width="20" height="15">&nbsp;&nbsp;
                                    <input id="idioma_val" name="idioma" type="radio" value="val" @if ($client->idioma == 'val') checked @endif>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/df/Flag_of_the_Land_of_Valencia_%28official%29.svg"
                                        alt="Valenciano" width="20" height="15">&nbsp;&nbsp;
                                    <input id="idioma_eng" name="idioma" type="radio" value="eng" @if ($client->idioma == 'eng') checked @endif>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Flag_of_the_United_Kingdom.svg"
                                        alt="Ingles" width="20" height="15">&nbsp;&nbsp;
                                </div>
                                @error('idioma')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">Keywords</label>
                                <input type="text" name="keywords" placeholder="Keywords" class="form-control mb-2"
                                    value="{{ old('keywords', $client->keywords) }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">Observaciones</label>
                                <input type="text" name="observaciones" placeholder="Observaciones"
                                    value="{{ old('observaciones', $client->observaciones) }}"
                                    class="form-control mb-2">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label class="control-label">Otros</label>
                                <input type="text" name="otros" placeholder="Otros" class="form-control mb-2"
                                    value="{{ old('otros', $client->otros) }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div>&nbsp;</div>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <button class="btn btn-primary" type="submit">Editar</button>&nbsp;
                        <a href="{{ route('clients.index') }}">
                            <button type="button" class="btn btn-outline-danger">Cancelar</button>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </section>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
