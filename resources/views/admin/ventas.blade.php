<?php

use Illuminate\Support\Facades\DB;
use Iluminate\Pagination\Paginator;

$ventas = DB::table('ventas')
            ->join('clientes', 'clientes.idCliente', '=', 'ventas.idCliente')
            ->join('tarifa', 'tarifa.idTarifa', '=', 'ventas.idTarifa')
            ->join('operador', 'operador.idOperador', '=', 'tarifa.idOperador')
            ->orderBy('idVenta', 'desc')
            ->get();
?>

@extends('adminlte::page')

@section('title', 'Ventas')

@section('content_header')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm">
      <h1>Ventas <a href="{{ route('crear_clientes') }}" class="rounded-circle btn btn-primary"><i class="fas fa-plus"></i></a></h1>
    </div>
  </div>
</div>

@stop

@section('content')
<body>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <!-- /.card -->
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
          <table id="example2" class="table table-hover table-striped table-responsive table-md text-sm">
              <thead class="table-primary">
                <tr>
                  <th>Id</th>
                  <th>Operador</th>
                  <th>Tarifa</th>
                  <th>Documento</th>
                  <th>Tipo</th>
                  <th>Cuota</th>
                  <th>Documento</th>
                  <th><i class='fas fa-user'></i></th>
                  <th>Titular</th>
                  <th><i class="fas fa-language"></i></th>
                  <th>Usuario</th>
                  <th>Línea</th>
                  <th>Alta</th>
                  <th>Porta</th>
                  <th>Activa</th>
                  <th>Estado</th>
                  <th>Baja</th>
                  <th>Observaciones</th>
                  <th>Incidencias</th>
                  <th>Comisión</th>
                  <th>Extra</th>
                  <th>Balance</th>
                  <th>Vendedor</th>
                  <th><i class='fas fa-pencil-alt'></i></th>
                </tr>
              </thead>

              <tbody>
                @foreach ($ventas as $row)
                <tr>
                  <td>{{ $row -> idVenta }}</td>
                  <td>{{ $row -> nombreTarifa }}</td>
                  <td>{{ $row -> descripcion }}</td>
                  <td>{{ $row -> nombreOperador }}</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="bg-info"></td>
                  <td><a href="#"><i class='fas fa-pencil-alt'></i></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
<script>
  $('#example2').DataTable({
    responsive: true,
    autoWidth: false,
    "order": [[ 0, "desc" ]],
    "language": {
      "lengthMenu": "Ver " +
        `<select class = "custom-select custom-select-sm form-control form-control-sm">
                            <option value = '5'>5</option>
                            <option value = '10'>10</option>
                            <option value = '25'>25</option>
                            <option value = '50'>50</option>
                            <option value = '-1'>All</option>
                          </select>` +
        " registros",
      "zeroRecords": "Ninguna coincidencia",
      "info": "Página _PAGE_ de _PAGES_",
      "infoEmpty": "Sin registros disponibles",
      "infoFiltered": "(filtrado de _MAX_ registros totales)",
      'search': 'Buscar',
      'paginate': {
        'next': 'Siguiente',
        'previous': 'Anterior'
      }
    }
  });
</script>
@stop