@extends('adminlte::page')

@section('title', 'Nueva Oferta')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>Nueva Oferta Fibra+Movil</h1>
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
    <form action="{{ route('frontend.store_resenas') }}" method="POST" files="true" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="row">
        <div class="col-4">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label">Nombre</label>
                    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" required>
                </div>
            </div>
        </div>
            <div class="col-4">
                <div class="box-body">
                    <div class="box-body">
                        <div class="form-gruop">
                            <label for="" class="control-label">Descripcion</label>
                            <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box-body">
                    <div class="box-body">
                        <div class="form-gruop">
                            <label for="" class="control-label">Foto</label>
                            <input type="file" name="foto" class="form-control mb-2">
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
