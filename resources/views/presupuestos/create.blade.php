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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@stop
@section('content')
<!-- Main content -->
<section class="content">
    <!-- /.card -->
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('presupuestos.store') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <div class="">
                            <label class="control-label">DNI</label>
                            <select name="idCliente" class="form-control mb-2" id="sjs-example-diacritics">
                                @foreach ($presupuestos as $pre)
                                    <option value="{{ $pre->idCliente }}">{{ $pre->dni }}, {{ $pre->nombre }}
                                        {{ $pre->apellido1 }} {{ $pre->apellido2 }}({{ $pre->alias }})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- <div class="col-md-4">
                        <div>
                            <input type="date" name="fecha_nacimiento" class="form-control mb-2" required hidden>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <a href="{{ route('clients.create') }}" class="btn btn-primary mb-2">Crear Cliente</a>
                        </div>
                    </div>
                </div> 
                <div class="row"> --}}
                    <div class="col-md-4">
                        <label class="control-label">Operador Actual</label>
                        <input type="text" name="opactual" placeholder="Operador Actual" class="form-control mb-2"
                            required>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="control-label">Cuota Actual</label>
                            <input type="number" name="cuotaactual" placeholder="Cuota Actual" class="form-control mb-2"
                                required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="control-label">Fin Permanencia</label>
                            <input type="date" name="finpermanencia" class="form-control mb-2" required>
                        </div>
                    </div>
                    {{-- </div>
                <div class="row"> --}}
                    <div class="col-md-4">
                        <label class="control-label">Tarifa</label>
                        <select name="idTarifa" class="form-control mb-2">
                            @foreach ($presupuestos as $pre)
                                <option value="{{ $pre->idTarifa }}">{{ $pre->nombreTarifa }}
                                    ({{ $pre->cuota }}€)</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="col-md-4">
                        <div>
                            <input type="date" name="fecha_nacimiento" class="form-control mb-2" required hidden>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <a href="{{ route('clients.create') }}" class="btn btn-primary mb-2">Nueva Linea</a>
                        </div>
                    </div>
                </div>
                <div class="row"> --}}
                    <div class="col-md-4">
                        <label class="control-label">numpresupuesto</label>
                        <input type="number" name="numpresupuesto" required placeholder="numpresupuesto"
                            class="form-control mb-2">
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">estado</label>
                        <input type="number" name="estado" required placeholder="estado" class="form-control mb-2">
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">poblacionPre</label>
                        <input type="text" name="poblacionPre" placeholder="poblacionPre" class="form-control mb-2"
                            required>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="control-label">fecha</label>
                            <input type="date" name="fecha" class="form-control mb-2" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Linea</label>
                        <input type="tel" name="linea" required placeholder="Linea" maxlength="9"
                            pattern="[6-7-9]{1}[0-9]{8}" class="form-control mb-2">
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="control-label">Usuario</label>
                            <input type="text" name="usuario" required placeholder="Usuario" class="form-control mb-2">
                        </div>
                    </div>
                    {{-- </div> --}}
                    <div class="row">
                        <div class="col-md-4">
                            <button class="btn btn-primary" type="submit">Añadir Presupuesto</button> &nbsp;
                            <button class="btn btn-danger" type="">Cancelar</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</section>
@stop

@section('js')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $("#js-example-diacritics").select2();

</script>
@stop