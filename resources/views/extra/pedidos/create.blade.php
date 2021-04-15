@extends('adminlte::page')

@section('title', 'Nuevo Pedido')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>Nuevo Pedido</h1>
            </div>
        </div>
    </div>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@stop
@section('content')
<!-- Main content -->

<!-- /.card -->
<form action="" method="POST">
    @csrf
    @method('PUT')
    <section class="content">
        <div class="row">
            <div class="col-4">
                <!-- /.card -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fas fa-user text-primary"></i> Cliente</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="control-label">Seleccionar</label><br>
                                    <select class="js-example-basic-single" name="idCliente">
                                        @foreach ($clients as $pre)
                                            <option value="{{ $pre->id }}">{{ $pre->dni }},
                                                {{ $pre->nombre }}
                                                {{ $pre->apellido1 }} {{ $pre->apellido2 }}
                                                @if ($pre->alias)
                                                    ({{ $pre->alias }})
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="control-label"></label>
                                    <button class="btn btn-primary">Nuevo Cliente</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-8">
                <!-- /.card -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fas fa-network-wired text-primary"></i> ???
                                </h3>
                            </div>
                            <div class="row">
                                <div class=" col-4 box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Estado</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Estado" name="estado">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cantidad</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1"
                                                placeholder="Cantidad" name="cantidad">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Producto</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="producto" placeholder="Producto">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <h3 class="box-title"><i class="fas fa-cubes text-primary"></i> ???</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="control-label">Telefono</label>
                                <input type="number" name="telefono" required placeholder="678901234"
                                    class="form-control mb-2">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="email@gmail.com" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">PVP</label>
                                <input type="number" class="form-control" id="exampleInputEmail1"
                                    placeholder="Solo si contrata fibra" name="pvp">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pagado</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Pagado" name="pagado">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="submit">Añadir producto</button> &nbsp;
                        <a href="{{ route('presupuestos.index') }}">
                            <button type="button" class="btn btn-danger">Cancelar</button>
                        </a>
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
                        <h3 class="box-title"><i class="fas fa-eye text-primary"></i> Observaciones</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label">Observaciones</label>
                        <input type="text" name="observaciones" required placeholder="Ej.: Regalo pulsera"
                            class="form-control mb-2">
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });

</script>
@stop
