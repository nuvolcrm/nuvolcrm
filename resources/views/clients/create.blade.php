@extends('adminlte::page')

@section('title', 'Nuevo Cliente')

@section('content_header')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <h1>Nuevo Cliente</h1>
        </div>
    </div>
</div>
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@stop
@section('content')
<!-- Main content -->
<section class="content">
    <!-- /.card -->
    <form action="{{ route('clients.store') }}" id="demoForm" method="POST">
        @csrf
        @method('PUT')
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="form-group required inline" data-fid="f99" name="tipo">
                                <label class="control-label" for="f99">Tipo</label>
                                <div class="radio">
                                    <input id="segmento_res" name="segmento" type="radio" value="par">
                                    <!-- <label for="segmento_res"> -->
                                    Particular&nbsp;&nbsp;
                                    <!-- </label> -->
                                    <input id="segmento_esp" name="segmento" type="radio" value="esp">
                                    <!-- <label for="segmento_esp"> -->
                                    Especial&nbsp;&nbsp;
                                    <!-- </label> -->
                                    <input id="segmento_aut" name="segmento" type="radio" value="aut">
                                    <!-- <label for="segmento_aut"> -->
                                    Autónomo&nbsp;&nbsp;
                                    <!-- </label> -->
                                    <input id="segmento_emp" name="segmento" type="radio" value="emp">
                                    <!-- <label for="segmento_emp"> -->
                                    Empresa
                                    <!-- </label> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Documento</label>
                            <input type="text" class="form-control mb-2" name="dni" id="" aria-describedby="" placeholder="Nº de DNI, NIE, PAS ó CIF" value="{{ old('dni') }}" required>
                    @error('dni')
                    <small id="" class="form-text text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div> --}}
            <div class="col-md-3">
                <div>
                    <label class="control-label">Documento</label>
                    <input type="text" name="dni" placeholder="Nº de DNI, NIE, PAS ó CIF" class="form-control mb-2" value="{{ old('dni') }}" required>
                    @error('dni')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Subir documento</label>
                    <input type="file" name="subirdni" placeholder="Selecciona archivo" value="{{ old('subirdni') }}" required>
                    @error('subirdni')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Caduca el...</label>
                    <input type="date" name="caduca" class="form-control mb-2" value="{{ old('caduca') }}" required>
                    @error('caduca')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div>
                    <label class="control-label">Alias</label>
                    <input type="text" name="alias" placeholder="Ej: TOMASI" class="form-control mb-2" value="{{ old('alias') }}">
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Nombre</label>
                    <input type="text" name="nombre" placeholder="Ej: TOMASA" class="form-control mb-2" value="{{ old('nombre') }}" required>
                    @error('nombre')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Primer Apellido</label>
                    <input type="text" name="apellido1" placeholder="Ej: GARCIA" class="form-control mb-2" value="{{ old('apellido1') }}" required>
                    @error('apellido1')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Segundo Apellido</label>
                    <input type="text" name="apellido2" placeholder="Ej: LOPEZ" value="{{ old('apellido2') }}" class="form-control mb-2">
                    @error('apellido2')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group f98 required inline" data-fid="f98" name="idioma">
                    <label class="control-label" for="f98">Idioma</label>
                    <div class="radio">
                        <input id="idioma_esp" name="idioma" type="radio" value="esp" checked>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Bandera_de_Espa%C3%B1a_%28nuevo_dise%C3%B1o%29.svg" alt="Español" width="20" height="15">&nbsp;&nbsp;
                        <input id="idioma_val" name="idioma" type="radio" value="val">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/df/Flag_of_the_Land_of_Valencia_%28official%29.svg" alt="Valenciano" width="20" height="15">&nbsp;&nbsp;
                        <input id="idioma_eng" name="idioma" type="radio" value="eng">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Flag_of_the_United_Kingdom.svg" alt="Ingles" width="20" height="15">&nbsp;&nbsp;
                    </div>
                    @error('idioma')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control mb-2" value="{{ old('fecha_nacimiento') }}" required>
                    @error('fecha_nacimiento')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">IBAN</label>
                    <input type="iban" name="cuenta" required placeholder="Ej: ES1020386090432000225568" class="form-control mb-2" value="{{ old('cuenta') }}">
                    @error('iban')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div>
                    <label class="control-label">Teléfono</label>
                    <input type="tel" name="telefono" required placeholder="Ej: 644744866" maxlength="9" pattern="[6-7-9]{1}[0-9]{8}" value="{{ old('telefono') }}" class="form-control mb-2">
                    @error('telefono')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Teléfono 2</label>
                    <input type="tel" name="telefono" required placeholder="Ej: 619636122" maxlength="9" pattern="[6-7-9]{1}[0-9]{8}" value="{{ old('telefono') }}" class="form-control mb-2">
                    @error('telefono')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Email</label>
                    <input type="email" name="email" required placeholder="Ej: HOLA@MOVY.ES" class="form-control mb-2" value="{{ old('email') }}">
                    @error('email')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Newsletter</label><br>
                    <input type="checkbox" name="newsletter" checked>
                </div>
            </div>
        </div>
        <div>
            <hr>
            <!-- <h5 class="text-primary text-bold">Dirección</h5> -->
        </div>
        <div class="row">
            <div class="col-md-3">
                <div>
                    <label class="control-label">Dirección</label>
                    <input type="text" name="direccion" placeholder="Ej: CALLE CONVENT, 89 PISO 3 PUERTA 8" class="form-control mb-2" value="{{ old('direccion') }}" required>
                    @error('direccion')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Código Postal</label>
                    <input type="text" class="form-control mb-2" name="codigoPostal" data-rule-number="true" maxlength="5" placeholder="Ej: 46200" value="{{ old('codigoPostal') }}" required>
                    @error('codigoPostal')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Población</label>
                    <input type="text" name="poblacion" placeholder="Ej: PAIPORTA" class="form-control mb-2" value="{{ old('poblacion') }}" required>
                    @error('poblacion')
                    <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <label class="control-label">Provincia</label><br>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Ej: VALENCIA">
                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                </div>
            </div>
        </div>
        <div>
            <hr class="bg-primary">
            <!-- <h5 class="text-primary text-bold">Información adicional</h5> -->
        </div>
        <div class="row">
            <div class="col-md-3">
                <div>
                    <label class="control-label">Keywords</label>
                    <input type="text" name="keywords" placeholder="Ej: JUANJO, NEOKIDS, LAPICES" class="form-control mb-2" value="{{ old('keywords') }}">
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Observaciones</label>
                    <input type="text" name="observaciones" placeholder="Ej: AMIGO DE JUANJO" value="{{ old('observaciones') }}" class="form-control mb-2">
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Comercial</label>
                    <input type="text" name="campanya" placeholder="Ej: JAVIER PEREZ" class="form-control mb-2" value="{{ old('keywords') }}">
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Campaña</label>
                    <input type="text" name="campanya" placeholder="Ej: FB16FEB21, flyers..." class="form-control mb-2" value="{{ old('keywords') }}">
                </div>
            </div>
        </div>
        <div>
            <hr class="bg-primary">
            <h5 class="text-primary text-bold">Datos empresa</h5>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div>
                    <label class="control-label">Marca comercial</label>
                    <input type="text" name="otros" placeholder="Ej: MOVY.ES" class="form-control mb-2" value="{{ old('otros') }}">
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Razón social</label>
                    <input type="text" name="otros" placeholder="Ej: MOVY SERVICIOS INTEGRALES SL" class="form-control mb-2" value="{{ old('otros') }}">
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label class="control-label">Obervaciones</label>
                    <input type="text" name="otros" placeholder="Ej: Dirección fiscal es CALLE CONVENT 89 PAIPORTA" class="form-control mb-2" value="{{ old('otros') }}">
                </div>
            </div>
        </div>
        <br>
        <div class="row d-flex justify-content-between">
            <button class="btn btn-primary" type="submit">Añadir</button>
            <a href="{{ route('clients.index') }}">
                <button type="button" class="btn btn-outline-danger">Cancelar</button>
            </a>
        </div>
        </div>
        </div>
    </form>
</section>
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
<!-- 
You have to include the full version of FormValidation which contains all validators
including the iban validator 
-->
<script src="/vendors/formvalidation/dist/js/FormValidation.full.min.js"></script>
<script src="/vendors/formvalidation/dist/js/plugins/Bootstrap.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function(e) {
        FormValidation.formValidation(
            document.getElementById('demoForm'), {
                fields: {
                    cuenta: {
                        validators: {
                            cuenta: {
                                message: 'The value is not a valid IBAN'
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    icon: new FormValidation.plugins.Icon({
                        valid: 'fa fa-check',
                        invalid: 'fa fa-times',
                        validating: 'fa fa-refresh'
                    }),
                },
            }
        );
    });
</script>
@stop