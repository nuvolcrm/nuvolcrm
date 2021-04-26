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
<!-- Main content -->
<!-- -->

<section class="content">
    <div class="row">
        <div class="col-md-4">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fas fa-user text-primary"></i> Cliente</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form action="{{ route('presupuestos.store') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                    <label class="control-label">Seleccionar</label><br>
                                    <select class="js-example-basic-single" style="width: 100%" name="idCliente">
                                        <!-- <select name="idCliente" class="form-control mb-2" id="sjs-example-diacritics"> -->
                                        @foreach ($presupuestos as $pre)
                                        <option value="{{ $pre->idCliente }}">{{ $pre->dni }}, {{ $pre->nombre }}
                                            {{ $pre->apellido1 }} {{ $pre->apellido2 }}
                                            @if ($pre->alias)
                                            ({{ $pre->alias }})
                                            @endif
                                        </option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-primary">Nuevo Cliente</button>
                                </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fas fa-network-wired text-primary"></i> Operador actual</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form">
                        <div class="row">
                            <div class=" col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Operador</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Compañía actual">
                                </div>
                            </div>
                                <div class="col-md-4">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cuota</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="€ que paga actualmente">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Fin permanencia</label>
                                            <input type="date" class="form-control" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="content">
    <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                    <h3 class="box-title"><i class="fas fa-cubes text-primary"></i> Añadir líneas</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label class="control-label">Operador</label><br>
                    <select name="idTarifa" class="js-example-basic-single" style="width: 100%">
                        @foreach ($presupuestos as $pre)
                        <option value="{{ $pre->idTarifa }}">{{ $pre->nombreTarifa }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Servicio</label>
                    <br>
                    <select name="idTarifa" class="js-example-basic-single" style="width: 100%">
                        @foreach ($presupuestos as $pre)
                        <option value="{{ $pre->idTarifa }}">{{ $pre->nombreTarifa }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Tarifa</label>
                    <br>
                    <select name="idTarifa" class="js-example-basic-single" style="width: 100%">
                        @foreach ($presupuestos as $pre)
                        <option value="{{ $pre->idTarifa }}">{{ $pre->nombreTarifa }}
                            ({{ $pre->cuota }}€)</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-4">
                        <label class="control-label">Línea</label>
                        <input type="text" name="numpresupuesto" required placeholder="678901234" class="form-control mb-2">
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Usuario</label>
                        <input type="text" name="estado" required placeholder="Ej.: HIJO JUAN" class="form-control mb-2">
                    </div>
                </div>
                <div class="row">
                                <div class="col-md-4">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Dirección instalación</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Solo si contrata fibra">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Código postal</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Código postal">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="row d-flex justify-content-between">

                    <!-- <div class="col-md-4"> -->
                        <button class="btn btn-primary" type="submit">Añadir producto</button> &nbsp;
                        <a href="{{ route('presupuestos.index') }}">
                            <button type="button" class="btn btn-outline-danger">Cancelar</button>
                        </a>
                    <!-- </div> -->
                </div>
                </form>
            </div>

        </div>

</section>


<section class="content">
    <!-- /.card -->
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fas fa-eye text-primary"></i> Observaciones</h3>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label">Observaciones</label>
                        <input type="text" name="numpresupuesto" required placeholder="Ej.: Regalo pulsera" class="form-control mb-2">
                    </div>
                    <div class="col-md-12">
                        <label class="control-label">Texto fijo</label>
                        <input type="text" name="estado" required placeholder="MOVY.ES no se hace responbsable bla bla bla. Validez bla bla bla" class="form-control mb-2" disabled>
                    </div>
                </div>
                
                </form>
            </div>

        </div>

</section>

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