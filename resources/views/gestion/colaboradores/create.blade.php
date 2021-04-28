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
    <link href="/skins/line/blue.css" rel="stylesheet">
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
                                <input type="text" name="dni" placeholder="DNI/NIE" class="form-control mb-2">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Nombre</label>
                                    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Alias</label>
                                    <input type="text" name="alias" placeholder="Alias" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Primer Apellido</label>
                                    <input type="text" name="apellido1" placeholder="Primer Apellido"
                                        class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Segundo Apellido</label>
                                    <input type="text" name="apellido2" placeholder="Segundo Apellido"
                                        class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Direccion</label>
                                    <input type="text" name="direccion" placeholder="Direccion"
                                        class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Cuenta</label>
                                    <input type="text" name="cuenta" placeholder="Cuenta" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">E-mail</label>
                                    <input type="text" name="email" placeholder="E-mail" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Telefono</label>
                                    <input type="number" name="telefono" placeholder="Telefono"
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
                                    <input type="number" name="tipo" placeholder="Tipo" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <div class="col-2">
                                        <input type="radio" name="iCheck">
                                        <label>off</label>
                                    </div>
                                    <div class="col-2">
                                        <input type="radio" name="iCheck" checked>
                                        <label>on</label>
                                    </div>
                                    {{-- <input type="radio" name="iCheck">off 
                                    <input type="radio" name="iCheck" checked> on --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="submit">Añadir producto</button> &nbsp;
                        <a href="{{ route('gestion.colaboradores.index') }}">
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

    $(document).ready(function() {
        $('input').each(function() {
            var self = $(this),
                label = self.next(),
                label_text = label.text();

            label.remove();
            self.iCheck({
                checkboxClass: 'icheckbox_line-blue',
                radioClass: 'iradio_line-blue',
                insert: '<div class="icheck_line-icon"></div>' + label_text
            });
        });
    });

</script>
<script src="/js/icheck.js"></script>
@stop
