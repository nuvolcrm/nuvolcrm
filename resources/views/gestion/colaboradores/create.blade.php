@extends('adminlte::page')

@section('title', 'Nuevo Colaborador')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>Nuevo Colaborador</h1>
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
            <form action="{{ route('gestion.colaboradores.store') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fas fa-cubes text-primary"></i> Datos del Colaborador</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="control-label">Documento</label>
                                <input type="text" name="nombreTarifa" placeholder="DNI/NIE"
                                    class="form-control mb-2">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Nombre</label>
                                    <input type="text" name="descripcion" placeholder="Nombre"
                                        class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Alias</label>
                                    <input type="text" name="descripcion_larga" placeholder="Alias"
                                        class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Primer Apellido</label>
                                    <input type="text" name="cuota" placeholder="Primer Apellido" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Segundo Apellido</label>
                                    <input type="text" name="datos" placeholder="Segundo Apellido" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Direccion</label>
                                    <input type="text" name="llamadas" placeholder="Direccion" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Cuenta</label>
                                    <input type="text" name="velocidad" placeholder="Cuenta"
                                        class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Telefono</label>
                                    <input type="text" name="permanencia" placeholder="Telefono"
                                        class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Tipo</label>
                                    <input type="text" name="comision_portabilidad" placeholder="Tipo"
                                        class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Activo</label>
                                    <input type="text" name="comision_nueva" placeholder="Activo"
                                        class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="submit">Añadir producto</button> &nbsp;
                        <a href="{{ route('gestion.colaboradores.index') }}">
                            <button type="button" class="btn btn-outline-danger">Cancelar</button>
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
