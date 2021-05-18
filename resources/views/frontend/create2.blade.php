@extends('adminlte::page')

@section('title', 'Nueva Oferta')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>Nueva Oferta Movil</h1>
            </div>
        </div>
    </div>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@stop
@section('content')
<!-- Main content -->
<section class="content">
    <!-- /.card -->
    <form action="{{ route('frontend.store2') }}" method="POST">
        @csrf
        @method('PUT')
    <div class="row">
        <div class="col-4">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label">Cantidad de GB</label>
                    <input type="text" name="titulo" placeholder="Cantidad de GB" class="form-control mb-2" required>
                </div>
            </div>
        </div>
            <div class="col-4">
                <div class="box-body">
                    <div class="box-body">
                        <div class="form-gruop">
                            <label for="" class="control-label">Descripcion</label>
                            <input type="text" name="descripcion1" placeholder="Breve descripción" class="form-control mb-2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box-body">
                    <div class="box-body">
                        <div class="form-gruop">
                            <label for="" class="control-label">Tipo de llamadas</label>
                            <input type="text" name="descripcion2" placeholder="Ej: Llamadas ilimitadas" class="form-control mb-2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box-body">
                    <div class="box-body">
                        <div class="form-gruop">
                            <label for="" class="control-label">Tipo de Permanencia</label>
                            <input type="text" name="descripcion3" placeholder="Ej: Sin Permanencia" class="form-control mb-2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box-body">
                    <div class="box-body">
                        <div class="form-gruop">
                            <label for="" class="control-label">Información adicional</label>
                            <input type="text" name="descripcion4" placeholder="Información adicional" class="form-control mb-2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box-body">
                    <div class="box-body">
                        <div class="form-gruop">
                            <label for="" class="control-label">Precio</label>
                            <input type="number" name="precio" placeholder="Precio" class="form-control mb-2">
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="row d-flex justify-content-between">
            <button class="btn btn-primary" type="submit">Añadir</button> &nbsp;
            <a href="{{ route('frontend.index') }}">
                <button type="button" class="btn btn-outline-danger">Cancelar</button>
            </a>
    </div>
    
</form>
</section>
@stop

@section('js')

@stop
