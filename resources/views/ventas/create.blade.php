@extends('adminlte::page')

@section('title', 'Nuevo Cliente')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>Nueva Venta</h1>
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
                    <div class="col-md-4">
    <!-- /.card -->
    <form action="{{ route('ventas.store') }}" method="POST">

                <label class="control-label">número de presupuesto</label>
                <input type="numder" name="Numpresupuesto" placeholder="Numpresupuesto" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">Cliente</label><br>
                <select class="js-example-basic-single" name="idCliente">
                <!-- <select name="idCliente" class="form-control mb-2" id="sjs-example-diacritics"> -->
                    @foreach ($ventas as $pre)
                        <option value="{{ $pre->idCliente }}">{{ $pre->dni }}, {{ $pre->nombre }}
                            {{ $pre->apellido1 }} {{ $pre->apellido2 }} 
                                @if ($pre->alias)
                                    ({{ $pre->alias }})
                                @endif
                            </option>
                    @endforeach
                </select>
        </div>
            <div class="col-md-4">
                <label class="control-label">Vendedor</label>
                <input type="number" name="vendedor" placeholder="vendedor" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">Tarifa</label><br>
                <!-- <select name="idTarifa" class="form-control mb-2" id="sjs-example-diacritics"> -->
                <select class="js-example-basic-single" name="idTarifa">

                    @foreach ($tarifas as $tarifa)
                        <option value="{{ $tarifa->idTarifa }}">{{ $tarifa->nombreTarifa }} ({{ $tarifa->cuota }}€)</option>
                    @endforeach
                </select>
                {{-- <label class="control-label">Tarifa</label>
                <input type="text" name="idTarifa" placeholder="idTarifa" class="form-control mb-2"
                    required> --}}
            </div>
            <div class="col-md-4">
                <label class="control-label">Colaborador</label><br>
                <select class="js-example-basic-single" name="idColaborador">
                <!-- <select name="idColaborador" class="form-control mb-2" > -->
                    @foreach ($colaboradores as $colaborador)
                        <option value="{{ $colaborador->idColaborador }}">({{ $colaborador->dni }}) {{ $colaborador->nombre }} {{ $colaborador->apellido1 }} {{ $colaborador->apellido2 }}</option>
                    @endforeach
                </select>
                {{-- <label class="control-label">idColaborador - DATE</label>
                <input type="text" name="idColaborador" placeholder="idColaborador" class="form-control mb-2"
                    required> --}}
            </div>
            <div class="col-md-4">
                <label class="control-label">Linea</label>
                <input type="text" name="linea" placeholder="linea" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4 d-flex flex-row">
                <label class="control-label">prepago</label>
                <input type="checkbox" name="prepago" class="form-control mb-2" >
            </div>
            <div class="col-md-4">
                <label class="control-label">ALTA</label>
                <input type="date" name="fecha_alta" placeholder="fecha_alta" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">ACTIVA</label>
                <input type="date" name="fecha_activa" placeholder="fecha_activa" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">Tipo de alta</label>
                <input type="text" name="tipoalta" placeholder="tipoalta" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">Libre</label>
                <input type="text" name="libre" placeholder="libre" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">Cobrado</label>
                <input type="text" name="cobrado" placeholder="cobrado" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">Pagado</label>
                <input type="text" name="pagado" placeholder="pagado" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">Comision</label>
                <input type="text" name="comision" placeholder="comision" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">Extracomision</label>
                <input type="text" name="extracomision" placeholder="extracomision" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label"></label>
                {{-- <input type="text" name="observaciones" placeholder="observaciones" class="form-control mb-2"
                    required> --}}
                <textarea name="observaciones" maxlength="500" placeholder="Observaciones"></textarea>
            </div>
            <div class="col-md-4">
                <label class="control-label"></label>
                {{-- <input type="text" name="incidencias" placeholder="incidencias" class="form-control mb-2"
                    required> --}}
                <textarea name="incidencias" maxlength="500" placeholder="Incidencias"></textarea>
            </div>
            <div class="col-md-4">
                <label class="control-label">Usuario</label>
                <input type="text" name="usuario" placeholder="usuario" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                
            </div>
            </div>
            <div class="row d-flex justify-content-between">
                <br><br>
                <button class="btn btn-primary" type="submit">Añadir</button> &nbsp;
                <a href="{{ route('ventas.index') }}">
                    <button type="button" class="btn btn-outline-danger">Cancelar</button>
                </a>
            </div>
            {{-- <h1>Numpresupuesto - INT</h1>
            <h1>idTarifa - INT</h1>
            <h1>idCliente - INT</h1>
            <h1>estado - INT</h1>
            <h1>fecha - DATE</h1>
            <h1>poblacionPre - VARCHAR(60)</h1>
            <h1>usuario - VARCHAR(100)</h1>
            <h1>linea - INT</h1>
            <h1>opactual - VARCHAR(50)</h1>
            <h1>cuotaactual - VARCHAR(50)</h1>
            <h1>finpermanencia - DATE</h1>
            <h1>texto_fijo - VARCHAR(50)</h1>
            <h1>textolibre - varchar(200)</h1> --}}
        </div>
    </form>
</section>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    </script>
@stop
