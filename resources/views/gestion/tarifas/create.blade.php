@extends('adminlte::page')

@section('title', 'Nueva Tarifa')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>Nueva Tarifa</h1>
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
            <form action="{{ route('gestion.tarifas.store') }}" method="POST">
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
                            <label class="control-label">Nombre Tarifa</label>
                            <input type="text" name="nombreTarifa" placeholder="Nombre Tarifa"
                                class="form-control mb-2">
                        </div>
                    </div>
                </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">descripcion</label>
                                    <input type="text" name="descripcion" placeholder="descripcion"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">descripcion larga</label>
                                    <input type="text" name="descripcion_larga" placeholder="descripcion larga"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">cuota</label>
                                    <input type="text" name="cuota" placeholder="cuota"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">datos</label>
                                    <input type="text" name="datos" placeholder="datos"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">llamadas</label>
                                    <input type="text" name="llamadas" placeholder="llamadas"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">velocidad</label>
                                    <input type="text" name="velocidad" placeholder="velocidad"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">permanencia</label>
                                    <input type="text" name="permanencia" placeholder="permanencia"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">comision_portabilidad</label>
                                    <input type="text" name="comision_portabilidad" placeholder="comision_portabilidad"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">comision_nueva</label>
                                    <input type="text" name="comision_nueva" placeholder="comision_nueva"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">comision_migra</label>
                                    <input type="text" name="comision_migra" placeholder="comision_migra"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">descatalogado</label>
                                    <input type="text" name="descatalogado" placeholder="descatalogado"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">idServicio </label>
                                    <input type="number" name="idServicio " placeholder="idServicio "
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">idOperador </label>
                                    <input type="number" name="idOperador " placeholder="idOperador"
                                    class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary" type="submit">Añadir producto</button> &nbsp;
                    <a href="{{ route('gestion.tarifas.index') }}">
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
