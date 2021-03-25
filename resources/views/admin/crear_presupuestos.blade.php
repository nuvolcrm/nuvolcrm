<?php
use Illuminate\Support\Facades\DB;
use Iluminate\Pagination\Paginator;
use App\Models\Presupuesto;

$presupuestos = DB::table('presupuestos')
            ->join('clientes', 'clientes.idCliente', '=', 'presupuestos.idCliente')
            ->join('tarifas', 'presupuestos.idTarifa', '=', 'tarifas.idTarifa')
            ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
            ->get();

?>

@extends('adminlte::page')

@section('title', 'Presupuestos')

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
        <form action="{{route('crearPre')}}" method="POST">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    
                        @csrf
                        <div>
                            <label class="control-label">DNI</label>
                            <select name="idCliente" class="form-control mb-2">
                                @foreach ($presupuestos as $pre)
                                <option value="{{$pre -> idCliente}}">{{$pre -> dni}}, {{$pre -> nombre}} {{$pre -> apellido1}} {{$pre -> apellido2}}({{$pre -> alias}})</option>                              
                                @endforeach
                        </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <input type="date" name="fecha_nacimiento" class="form-control mb-2" required hidden>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <a href="{{ route('crear_clientes') }}" class="btn btn-primary mb-2">Crear Cliente</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <label class="control-label">Operador Actual</label>
                        <input type="text" name="opactual" placeholder="Operador Actual" class="form-control mb-2" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label class="control-label">Cuota Actual</label>
                        <input type="number" name="cuotaactual" placeholder="Cuota Actual" class="form-control mb-2" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label class="control-label">Fin Permanencia</label>
                        <input type="date" name="finpermanencia" class="form-control mb-2" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <label class="control-label">Tarifa</label>
                        <select name="idTarifa" class="form-control mb-2">
                            @foreach ($presupuestos as $pre)
                            <option value="{{$pre -> idTarifa}}">{{$pre -> nombreTarifa}}  ({{$pre -> cuota}}€)</option>                              
                            @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <input type="date" name="fecha_nacimiento" class="form-control mb-2" required hidden>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                    </div>
                 </div>
                <div class="col-md-4">
                    <div>
                        <a href="{{ route('crear_clientes') }}" class="btn btn-primary mb-2">Nueva Linea</a>
                    </div>
                 </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <label class="control-label">Linea</label>
                        <input type="tel" name="linea" required placeholder="Linea" maxlength="9" pattern="[6-7-9]{1}[0-9]{8}" class="form-control mb-2">
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label class="control-label">Usuario</label>
                        <input type="text" name="usuario" required placeholder="Usuario" class="form-control mb-2">
                    </div>
                 </div>
            </div>
            <div class="row">
                <button class="btn btn-primary" type="submit">Añadir Presupuesto</button>&nbsp;
                <button class="btn btn-danger" type="submit">Cancelar</button>
            </div>
        </div>
        </form>
    </div>
</section>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Crear Presupuestos');
</script>
@stop