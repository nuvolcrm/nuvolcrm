<?php

use Illuminate\Support\Facades\DB;
use Iluminate\Pagination\Paginator;

$ventas = DB::table('ventas')
            ->join('tarifa', 'tarifa.idTarifa', '=', 'ventas.idTarifa')
            ->orderBy('idVentas', 'desc')
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
          <table id="example2" class="table table-hover table-striped table-responsive-xl table-md text-sm">
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
                  <td>{{ $row -> idVentas }}</td>
                  <td></td>
                  <td>{{ $row -> alias }}</td>
                  <td>{{ $row -> dni }}</td>
                  <td>
                    @if ($row-> idioma === 'Valenciano')
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/df/Flag_of_the_Land_of_Valencia_%28official%29.svg" alt="Valenciano" width="20" height="15">
                    @elseif ($row-> idioma === 'Español')
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Bandera_de_Espa%C3%B1a_%28nuevo_dise%C3%B1o%29.svg" alt="Español" width="20" height="15">
                    @elseif ($row-> idioma === 'Ingles')
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Flag_of_the_United_Kingdom.svg" alt="Ingles" width="20" height="15">
                    @else
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b0/No_flag.svg" alt="NO" width="20" height="15">
                    @endif
                  </td>
                  <td class="text-nowrap">
                    <a class='fas fa-phone-square-alt' href="tel:{{$row->telefono}}"></a>
                    <a class='fab fa-whatsapp text-success' href="https://api.whatsapp.com/send?phone=34{{$row-> telefono}}"></a>
                    {{$row-> telefono}}
                    </td>
                  <td>{{$row-> direccion}}</td>
                  <td>{{$row-> poblacion}}</td>
                  <td>{{$row-> fecha_nacimiento}}
                    @if ($row-> fecha_nacimiento === date('Y-m-d')) <!-- esta condición no es correcta. Habría que cortar del string el mes/día y compararlos con el mes/dia actual date('m-d')-->
                      <i class="fas fa-birthday-cake text-primary"></i>
                    @endif                    
                    </td>
                  <td>{{$row-> segmento}}</td>
                  <td><a class="far fa-envelope" href=" mailto:{{$row-> email}}"></a></td>
                  <td>{{$row-> email}}</td>
                  <td>
                    @if ($row-> mailing === 'on')
                    <i class="fas fa-check text-primary"></i>
                    @endif
                  </td>
                  <td class="bg-info"></td>
                  <td><a href="{{route('editar_cliente',$row->idCliente)}}"><i class='fas fa-pencil-alt'></i></a></td>
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