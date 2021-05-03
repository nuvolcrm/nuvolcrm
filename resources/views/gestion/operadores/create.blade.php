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
            <div class="row">
                <div class="col-4">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="control-label">Nombre</label>
                            <input type="text" name="nombreOperador" placeholder="Ej: Pepephone" class="form-control mb-2">
                        </div>
                    </div>
                </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Web Cliente</label>
                                    <input type="text" name="enlace" placeholder="Ej: https://www.pepephone.com/" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Web Distribuidor</label>
                                    <input type="text" name="distribuidores" placeholder="Ej: https://canales.pepephone.com/" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Color</label>
                                    <input type="color" name="color" placeholder="Color" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="image" class="control-label">Logo</label>
                                    <input type="file" name="logo" placeholder="logo" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <br>
            <div class="row d-flex justify-content-between">
                    <button class="btn btn-primary" type="submit">Añadir</button> &nbsp;
                    <a href="{{ route('gestion.operadores.index') }}">
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
