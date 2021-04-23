@extends('adminlte::page')

@section('title', 'Nuevo Servicio')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>Nuevo Servicio</h1>
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
            <form action="{{ route('gestion.servicios.store') }}" method="POST">
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
                            <label class="control-label">Servicio</label>
                            <input type="text" name="servicio" placeholder="Servicio"
                                class="form-control mb-2">
                        </div>
                    </div>
                </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Descripcion</label>
                                    <input type="text" name="descripcionServicio" placeholder="Descripcion"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Imagen</label>
                                    <select class="js-example-basic-single" style="width: 100%" name="imagen">
                                        <option value="fas fa-wifi">Wifi</option>
                                        <option value="fas fa-mobile-alt">Movil</option>
                                        <option value="fas fa-coins">Prepago</option>
                                        <option value="fas fa-tv">Televisión</option>
                                        <option value="fas fa-lightbulb">Energia</option>
                                        <option value="fas fa-shield-alt">Alarma</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary" type="submit">Añadir producto</button> &nbsp;
                    <a href="{{ route('gestion.servicios.index') }}">
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
