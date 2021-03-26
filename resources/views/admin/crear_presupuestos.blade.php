<?php
use Illuminate\Support\Facades\DB;
use Iluminate\Pagination\Paginator;

$presupuestos = DB::table('presupuestos')
            ->join('clients', 'clients.id', '=', 'presupuestos.id')
            ->join('tarifas', 'presupuestos.idTarifa', '=', 'tarifas.idTarifa')
            ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
            ->get();

?>

@extends('adminlte::page')

@section('title', 'clients')

@section('content_header')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm">
      <h1>Nuevo Presupuesto</h1>
    </div>
  </div>
</div>
@stop

@section('content')
<!-- Main content -->
<section class="content">
    <!-- /.card -->
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <form action="{{route('crearPre')}}" method="POST">
                        @csrf
                        <div class="col-sm">
                            <div>
                                <label class="control-label">DNI</label>
                                <input type="text" name="dni" placeholder="DNI" class="form-control mb-2" required>
                            </div>
                            <a href="{{ route('crear_clients') }}" class="btn btn-primary"><i>Crear Cliente</i></a>
                        </div>
                        <div class="row">
                            <button class="btn btn-primary" type="submit">Añadir</button>&nbsp;
                            <button class="btn btn-danger" type="submit">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Crear clients');
</script>
@stop