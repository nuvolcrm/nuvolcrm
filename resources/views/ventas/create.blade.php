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
    <form action="{{ route('ventas.store') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <label class="control-label">Numpresupuesto - INT</label>
                <input type="text" name="Numpresupuesto" placeholder="Numpresupuesto" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">idCliente  - INT</label>
                <input type="text" name="idCliente " placeholder="idCliente " class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">vendedor - INT</label>
                <input type="text" name="vendedor" placeholder="vendedor" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">idTarifa - INT</label>
                <input type="text" name="idTarifa" placeholder="idTarifa" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">idColaborador - DATE</label>
                <input type="text" name="idColaborador" placeholder="idColaborador" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">linea - VARCHAR(60)</label>
                <input type="text" name="linea" placeholder="linea" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">prepago - VARCHAR(100)</label>
                <input type="text" name="prepago" placeholder="prepago" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">fecha_alta - INT</label>
                <input type="date" name="fecha_alta" placeholder="fecha_alta" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">fecha_activa - VARCHAR(50)</label>
                <input type="date" name="fecha_activa" placeholder="fecha_activa" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">fecha_sale - VARCHAR(50)</label>
                <input type="date" name="fecha_sale" placeholder="fecha_sale" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">tipoalta - DATE</label>
                <input type="date" name="tipoalta" placeholder="tipoalta" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">libre - VARCHAR(50)</label>
                <input type="text" name="libre" placeholder="libre" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">cobrado - varchar(200)</label>
                <input type="text" name="cobrado" placeholder="cobrado" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">pagado - varchar(200)</label>
                <input type="text" name="pagado" placeholder="pagado" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">comision - varchar(200)</label>
                <input type="text" name="comision" placeholder="comision" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">extracomision - varchar(200)</label>
                <input type="text" name="extracomision" placeholder="extracomision" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">observaciones - varchar(200)</label>
                <input type="text" name="observaciones" placeholder="observaciones" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">incidencias - varchar(200)</label>
                <input type="text" name="incidencias" placeholder="incidencias" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <label class="control-label">usuario - varchar(200)</label>
                <input type="text" name="usuario" placeholder="usuario" class="form-control mb-2"
                    required>
            </div>
            <div class="col-md-4">
                <br><br>
                <button class="btn btn-primary" type="submit">Añadir Presupuesto</button> &nbsp;
                <button class="btn btn-danger" type="">Cancelar</button>
            </div>
            {{-- <h1>Numpresupuesto - INT</h1>
            <h1>idTaeifa - INT</h1>
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

@stop
