@extends('adminlte::page')

@section('title', 'Nuevo Presupuesto')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>Nuevo Presupuesto</h1>
            </div>
        </div>
    </div>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
@endsection

@stop
@section('content')

<!-- form start -->
<form action="{{ route('presupuestos.store') }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fas fa-user text-primary"></i> Cliente</h3>
                        </div>
                        <div class="row">
                            <label class="control-label">Seleccionar</label><br>
                            <select class="js-example-basic-single" style="width: 100%" name="idCliente">
                                <!-- <select name="idCliente" class="form-control mb-2" id="sjs-example-diacritics"> -->
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->dni }},
                                        {{ $client->nombre }}
                                        {{ $client->apellido1 }} {{ $client->apellido2 }}
                                        @if ($client->alias)
                                            ({{ $client->alias }})
                                        @endif
                                    </option>
                                @endforeach
                            </select>
                            <button class="btn btn-primary"
                                onclick="window.open('{{ route('clients.create') }}')">Nuevo Cliente</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fas fa-network-wired text-primary"></i> Operador actual</h3>
                        </div>
                        <div class="row">
                            <div class=" col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Operador</label>
                                    <input type="text" name="opactual" class="form-control" id="exampleInputEmail1"
                                        placeholder="Compañía actual">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Cuota</label>
                                        <input type="text" name="cuotaactual" class="form-control"
                                            id="exampleInputEmail1" placeholder="€ que paga actualmente">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fin permanencia</label>
                                        <input type="date" name="finpermanencia" class="form-control"
                                            id="exampleInputEmail1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fas fa-cubes text-primary"></i> Añadir líneas</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label class="control-label">Operador</label><br>
                    <select name="??" class="js-example-basic-single" style="width: 100%">
                        @foreach ($operadores as $operador)
                            <option value="{{ $operador->idOperador }}">{{ $operador->nombreOperador }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Servicio</label>
                    <br>
                    <select name="??" class="js-example-basic-single" style="width: 100%">
                        @foreach ($servicios as $servicio)
                            <option value="{{ $servicio->idServicio }}">{{ $servicio->servicio }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Tarifa</label>
                    <br>
                    <select name="idTarifa" class="js-example-basic-single" style="width: 100%">
                        @foreach ($tarifas as $tarifa)
                            <option value="{{ $tarifa->idTarifa }}">{{ $tarifa->nombreTarifa }}
                                ({{ $tarifa->cuota }}€)</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label class="control-label">Línea</label>
                    <input type="number" name="linea" required placeholder="678901234" class="form-control mb-2">
                </div>
                <div class="col-md-4">
                        <div class="input-group">
                            <div class="form-group required inline" data-fid="f99" name="tipo">
                                <label class="control-label" for="f99">Tipo</label>
                                <div class="radio">
                                    <input id="porta" name="alta" type="radio" value="par">
                                    Portabilidad&nbsp;&nbsp;
                                    <input id="nueva" name="alta" type="radio" value="esp">
                                    Alta nueva&nbsp;&nbsp;
                                    <input id="migra" name="alta" type="radio" value="aut">
                                    Migración
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-4">
                    <label class="control-label">Usuario</label>
                    <input type="text" name="usuario" required placeholder="Ej.: HIJO JUAN" class="form-control mb-2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Dirección instalación</label>
                            <input type="text" name="??" class="form-control" id="exampleInputEmail1"
                                placeholder="Solo si contrata fibra">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Código postal</label>
                            <input type="text" name="poblacionPre" class="form-control" id="exampleInputEmail1"
                                placeholder="Código postal">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <button class="btn btn-primary" type="submit">Añadir producto</button> &nbsp;
                <a href="{{ route('presupuestos.index') }}">
                    <button type="button" class="btn btn-outline-danger">Cancelar</button>
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fas fa-eye text-primary"></i> Observaciones</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label class="control-label">Observaciones</label>
                    <input type="text" name="textolibre" required placeholder="Ej.: Regalo pulsera"
                        class="form-control mb-2">
                </div>
                <div class="col-md-12">
                    <label class="control-label">Texto fijo</label>
                    <input type="text" name="texto_fijo" required
                        placeholder="MOVY.ES no se hace responbsable bla bla bla. Validez bla bla bla"
                        class="form-control mb-2" disabled>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- falta numpresupuesto y estado. --}}
@stop

@section('js')

<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
<!-- <script>
$("#js-example-diacritics").select2();
</script> -->
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });

</script>
@stop
