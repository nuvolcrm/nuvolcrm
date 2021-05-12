@extends('adminlte::page')

@section('title', 'Editar Reseñas')

@section('content_header')
<h1>Editar Reseñas</h1>
@stop

@section('content')
<!-- Main content -->
<section class="content">
    <form action="{{route('frontend.update_resenas', $resenas)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-4">
                <div class="box-body">
                    <div class="form-group">
                        <label class="control-label">Cantidad de GB</label>
                        <input type="text" name="nombre" placeholder="" value="{{$resenas -> nombre}}" class="form-control mb-2">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box-body">
                    <div class="box-body">
                        <div class="form-gruop">
                            <label for="" class="control-label">Descripcion</label>
                            <input type="text" name="descripcion" placeholder="" class="form-control mb-2" value="{{$resenas -> descripcion}}">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-4">
                <div class="box-body">
                    <div class="box-body">
                        <div class="form-gruop">
                            <label for="image" class="control-label">Foto</label>
                            <input type="file" name="foto" placeholder="" value="{{$resenas -> foto}}" class="form-control mb-2">
                        </div>
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
    </form>
</section>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop