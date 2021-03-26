<?php

use Illuminate\Support\Facades\DB;
use Iluminate\Pagination\Paginator;

$presupuestos = DB::table('presupuestos')
  ->join('clients', 'clients.id', '=', 'presupuestos.id')
  ->join('tarifas', 'presupuestos.idTarifa', '=', 'tarifas.idTarifa')
  ->join('servicios', 'tarifas.idServicio', '=', 'servicios.idServicio')
  ->orderBy('presupuestos.idPresupuesto', 'desc')
  ->get();

?>
@extends('adminlte::page')

@section('title', 'Presupuestos')

@section('content_header')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm">
      <h1>Presupuestos <a href="{{ route('crear_presupuestos') }}" class="rounded-circle btn btn-primary"><i class="fas fa-plus"></i></a></h1>
    </div>
  </div>
</div>

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/css/admin_custom.css">

@endsection

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
            <table id="example2" class="table table-hover table-responsive-xl table-md text-sm">
              <thead class="table-primary">
                <tr>
                  <th>Id</th>
                  <th>Fecha</th>
                  <th>Nombre y apellidos</th>
                  <!-- <th><i class='fas fa-phone-square-alt'></i><i class='fab fa-whatsapp'></i></th> -->
                  <th>Teléfono</th>
                  <th>Población</th>
                  <th>Servicios</th>
                  <th>Cuota</th>
                  <th>Detalle</th>
                  <th><i class='far fa-file-pdf'></i></th>
                  <th>Operaciones</th>
                  <!-- <th></th>
                  <th></th>
                  <th></th> -->
                  <th>Valor</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($presupuestos as $pre)
                <tr>
                  <td>{{ $pre -> idPresupuesto }}</td>
                  <td>{{ $pre -> fecha }}</td>
                  <td>
                  @if ($pre -> alias <> '')
                  ("{{ $pre -> alias }}")
                  @endif
                  {{ $pre -> nombre.' '.$pre-> apellido1.' '.$pre-> apellido2 }}</td>
                  <td class="text-nowrap">
                    <a class='fas fa-phone-square-alt' href="tel:{{$pre->telefono}}"></a>
                    <a class='fab fa-whatsapp text-success' href="https://api.whatsapp.com/send?phone=34{{$pre-> telefono}}"></a>
                    {{$pre-> telefono}}
                  </td>
                  <td>{{ $pre-> poblacionPre }}</td>
                  <td><i class="fas fa-wifi"></i> X <i class="fas fa-mobile-alt"></i> Y</td>
                  <td class="text-right">{{$pre-> cuota}}&nbsp€</td>
                  <td>
                    <!-- <button-sm type='button' id='presupuesto' class='btn-sm' data-toggle='modal' data-id='' data-target='#miModal' onclick='mostrarid(this.value);' value=''> -->
                    <a href='#'><i class='far fa-list-alt text-primary'></i></a>
                    <!-- </button> -->
                  </td>
                  <td>
                    <!-- <button-sm class='btn-sm alert-light'> -->
                    <a target='_blank' href="{{ route('imprimir') }}"><i class='far fa-file-pdf'></i></a>
                    <!-- </button> -->
                  </td>
                  <td>
                    <!-- <form method='POST' action=''>
                    <td value='' name=''>
                    <button-sm class='btn-sm btn-success' name='' value='' type='submit'>
                    <i class='far fa-smile'></i>
                    </button>
                    </td>
                    </form>
                    <form method='POST' action=''>
                    <td value='' name=''>
                    <button-sm class='btn-sm btn-warning' name='' value='' type='submit'>
                    <i class='far fa-meh'></i>
                    </button>
                    </td>
                    </form>
                    <form method='POST' action=''>
                    <td value='' name=''>
                    <button-sm class='btn-sm btn-danger' name='' value='' type='submit'>
                    <i class='far fa-frown'></i>
                    </button>
                    </td>
                    </form> -->
                    <button class='btn-xs btn-success'><i class='far fa-smile'></i></button>
                    <button class='btn-xs btn-warning'><i class='far fa-meh'></i></button>
                    <button class='btn-xs btn-danger'><i class='far fa-frown'></i></button>
                  </td>
                  <td class="bg-info"></td>
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
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
  console.log('Hi!');
</script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
<script>
  $('#example2').DataTable({
    responsive: true,
    autoWidth: false,
    "order": [
      [0, "desc"]
    ],
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