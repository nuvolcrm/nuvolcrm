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
            <div class="row">
                <div class="col-4">
                    <div class="box-body">
                        <div class="box-body">
                            <div class="form-gruop">
                                <label for="" class="control-label">Operador</label>
                                <input type="select" name="idOperador " placeholder="Ej: Pepephone" class="form-control mb-2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box-body">
                        <div class="box-body">
                            <div class="form-gruop">
                                <label for="" class="control-label">Servicio</label>
                                <input type="select" name="idServicio " placeholder="Ej: Movil" class="form-control mb-2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="control-label">Nombre</label>
                            <input type="text" name="nombreTarifa" placeholder="Ej: La Inimitable" class="form-control mb-2">
                        </div>
                    </div>
                </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Descripción corta</label>
                                    <input type="text" name="descripcion" placeholder="39GB + llamadas ilimitadas" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Descripción larga</label>
                                    <!-- <textarea name="descripcion_larga" maxlength="500" placeholder="39GB acumulables + llamadas ilimitadas. Cobertura Yoigo. Sin permanencia."></textarea> -->
                                    <input type="text" name="descripcion_larga" placeholder="39GB acumulables + llamadas ilimitadas. Cobertura Yoigo. Sin permanencia." class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Cuota</label>
                                    <input type="number" name="cuota" placeholder="cuota" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Gigas</label>
                                    <input type="number" name="datos" placeholder="Ej: 39" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Minutos</label>
                                    <input type="number" name="llamadas" placeholder="Ej: 9999 (ilimitados)" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Velocidad fibra (mbps)</label>
                                    <input type="number" name="velocidad" placeholder="Ej: 600" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Permanencia (meses)</label>
                                    <input type="number" name="permanencia" placeholder="Ej: 0" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Clawback (meses)</label>
                                    <input type="number" name="clawback" placeholder="Ej: 6" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Comision porta (€)</label>
                                    <input type="number" name="comision_portabilidad" placeholder="Ej: 40" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Comision migra (€)</label>
                                    <input type="number" name="comision_nueva" placeholder="Ej: 30" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Comision nueva (€)</label>
                                    <input type="number" name="comision_migra" placeholder="Ej: 30" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Descatalogada</label>
                                    <input type="check" name="descatalogado" placeholder="descatalogado" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
            </div>
            <br>
            <div class="row d-flex justify-content-between">
                    <button class="btn btn-primary" type="submit">Añadir producto</button> &nbsp;
                    <a href="{{ route('gestion.tarifas.index') }}">
                        <button type="button" class="btn btn-outline-danger">Cancelar</button>
                    </a>
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
