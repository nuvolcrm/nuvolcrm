@extends('adminlte::page')

@section('title', 'Nuevo Operador')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>Nuevo Operador</h1>
            </div>
        </div>
    </div>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@stop
@section('content')
<section class="content">
    <!-- /.card -->
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('gestion.operadores.store') }}" method="POST">
                @csrf
                @method('PUT')
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fas fa-cubes text-primary"></i> ???</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="control-label">Nombre Operador</label>
                            <input type="text" name="nombreOperador" placeholder="Nombre Operador"
                                class="form-control mb-2">
                        </div>
                    </div>
                </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Orden</label>
                                    <input type="number" name="orden" placeholder="orden"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Enlace</label>
                                    <input type="text" name="enlace" placeholder="Enlace"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Distribuidor</label>
                                    <input type="text" name="distribuidores" placeholder="distribuidor"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Cliente</label>
                                    <input type="text" name="cliente" placeholder="Cliente"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Color</label>
                                    <input type="text" name="color" placeholder="Color"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="image" class="control-label">Logo</label>
                                    <input type="file" name="logo" placeholder="logo"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary" type="submit">Añadir producto</button> &nbsp;
                    <a href="{{ route('gestion.operadores.index') }}">
                        <button type="button" class="btn btn-danger">Cancelar</button>
                    </a>
                </div>
            </div>
            
            </form>
        </div>
    </div>
</section>

@stop

@section('js')

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });

</script>
@stop
