@extends('adminlte::page')

@section('title', 'Editar Oferta')

@section('content_header')
<h1>Editar Oferta Movil</h1>
@stop

@section('content')
<!-- Main content -->
<section class="content">
    <form action="{{route('frontend.update2', $moviles)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-4">
                <div class="box-body">
                    <div class="form-group">
                        <label class="control-label">Cantidad de GB</label>
                        <input type="text" name="titulo" placeholder="" value="{{$moviles -> titulo}}" class="form-control mb-2">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box-body">
                    <div class="box-body">
                        <div class="form-gruop">
                            <label for="" class="control-label">Descripcion</label>
                            <input type="text" name="descripcion1" placeholder="" class="form-control mb-2" value="{{$moviles -> descripcion1}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box-body">
                    <div class="box-body">
                        <div class="form-gruop">
                            <label for="" class="control-label">Tipo de llamadas</label>
                            <input type="text" name="descripcion2" placeholder="" class="form-control mb-2" value="{{$moviles -> descripcion2}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box-body">
                    <div class="box-body">
                        <div class="form-gruop">
                            <label for="" class="control-label">Tipo de Permanencia</label>
                            <input type="text" name="descripcion3" placeholder="" class="form-control mb-2" value="{{$moviles -> descripcion3}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box-body">
                    <div class="box-body">
                        <div class="form-gruop">
                            <label for="" class="control-label">Información adicional</label>
                            <input type="text" name="descripcion4" placeholder="" class="form-control mb-2" value="{{$moviles -> descripcion4}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box-body">
                    <div class="box-body">
                        <div class="form-gruop">
                            <label for="" class="control-label">Precio</label>
                            <input type="text" name="precio" placeholder="" class="form-control mb-2" value="{{$moviles -> precio}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <button class="btn btn-primary" type="submit">Guardar cambios</button>
                <a href="{{ route('frontend.index') }}">
                    <button type="button" class="btn btn-outline-danger">Cancelar</button>
                </a>
            </div>
        </div>
    </form>
</section>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop