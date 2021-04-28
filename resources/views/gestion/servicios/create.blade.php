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
            <div class="row">
                <div class="col-md-4">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="control-label">Nombre</label>
                            <input type="text" name="servicio" placeholder="Ej: Fibra pack" class="form-control mb-2">
                        </div>
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Descripción</label>
                                    <input type="text" name="descripcionServicio" placeholder="Ej: Servicio de fibra convergente" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-gruop">
                                    <label for="" class="control-label">Icono (FontAwesome)</label>
                                    <input type="text" name="descripcionServicio" placeholder="Ej: fas fa-wifi" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <br>
            <div class="row d-flex justify-content-between">
                    <button class="btn btn-primary" type="submit">Añadir</button> &nbsp;
                    <a href="{{ route('gestion.servicios.index') }}">
                        <button type="button" class="btn btn-outline-danger">Cancelar</button>
                    </a>
            </div>
            
        </form>
        </div>
    </div>
</section>

@stop