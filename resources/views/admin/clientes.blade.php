<?php

use Illuminate\Support\Facades\DB;
use Iluminate\Pagination\Paginator;

$clientes = DB::table('clientes')->get();
?>
@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/css/admin_custom.css">
@endsection

<div class="container-fluid">
  <div class="row">
    <div class="col-sm">
      <h1>Clientes <a href="{{ route('crear_clientes') }}" class="rounded-circle btn btn-primary"><i class="fas fa-plus"></i></a></h1>
    </div>
  </div>
</div>

@stop
@section('content')
<<<<<<< HEAD
=======
    <body>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-hover table-striped table-responsive text-nowrap text-sm">
                  <thead>
                        <tr>
                            <th>DOCUMENTO</th>
                            <th>NOMBRE</th>
                            <th><i class="fas fa-language"></i></th>
                            <th>ALIAS</th>
                            <th><i class='fas fa-phone-square-alt'></i></th>
                            <th>TELEFONO</th>
                            <th><i class="fab fa-whatsapp"></i></th>
                            <th>DIRECCION</th>
                            <th>POBLACION</th>
                            <th>NACIMIENTO</th>
                            <th>SEGM</th>
                            <th><i class='far fa-envelope'></i></th>
                            <th>EMAIL</th>
                            <th><i class='far fa-newspaper'></i></th>
                            <th>COD</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($clientes as $row) { 
                        ?>
                        <tr>
                            <td><?php echo $row -> dni?></td>
                            <td><?php echo $row -> nombre,' ',$row-> apellido1,' ',$row-> apellido2?></td>
                            <td><img width="100%" src="https://nuvolcrm.movy.es/vendor/adminlte/dist/img/idiomas/<?php echo $row-> idioma?>.png"><br></td>
                            <td><?php echo $row-> alias?></td>
                            <td><a class='fas fa-phone-square-alt' href="tel:<?php echo $row-> telefono?>"></td>
                            <td><?php echo $row-> telefono?></td>
                            <td><a class='fab fa-whatsapp' href="https://api.whatsapp.com/send?phone=34<?php echo $row-> telefono?>"></td>
                            <td><?php echo $row-> direccion?></td>
                            <td><?php echo $row-> poblacion?></td>
                            <td><?php echo $row-> fecha_nacimiento?></td>
                            <td><?php echo $row-> segmento?></td>
                            <td><a class='far fa-envelope' href=" mailto:<?php echo $row-> email?>"></td>
                            <td><?php echo $row-> email?></td>
                            <td><?php echo $row-> mailing?></td>
                            <td style='background-color:#EEFCFF'></td>
                            <td><a href="{{route('editar_cliente',$row->idcliente)}}"><i class='fas fa-pencil-alt'></i></a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody> 
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </body>
@stop
>>>>>>> b7d1b869a7fc8e1fbf22839c3cd7a02c87d6165d

<body>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <!-- /.card -->
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-hover table-striped table-responsive text-nowrap text-sm">
              <thead>
                <tr>
                  <th>DOCUMENTO</th>
                  <th>NOMBRE</th>
                  <th><i class="fas fa-language"></i></th>
                  <th>ALIAS</th>
                  <th><i class='fas fa-phone-square-alt'></i></th>
                  <th>TELEFONO</th>
                  <th><i class="fab fa-whatsapp"></i></th>
                  <th>DIRECCION</th>
                  <th>POBLACION</th>
                  <th>NACIMIENTO</th>
                  <th>SEGM</th>
                  <th><i class='far fa-envelope'></i></th>
                  <th>EMAIL</th>
                  <th><i class='far fa-newspaper'></i></th>
                  <th>COD</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                @foreach ($clientes as $row)
                <tr>
                  <td>{{$row -> dni}}</td>
                  <td>{{$row -> nombre,' ',$row-> apellido1,' ',$row-> apellido2}}</td>
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
                  <td>{{$row-> alias}}</td>
                  <td><a class='fas fa-phone-square-alt' href="tel:{{$row->telefono}}"></td>
                  <td>{{$row-> telefono}}</td>
                  <td><a class='fab fa-whatsapp' href="https://api.whatsapp.com/send?phone=34{{$row-> telefono}}"></td>
                  <td>{{$row-> direccion}}</td>
                  <td>{{$row-> poblacion}}</td>
                  <td>{{$row-> fecha_nacimiento}}</td>
                  <td>{{$row-> segmento}}</td>
                  <td><a class='far fa-envelope' href=" mailto:{{$row-> email}}"></td>
                  <td>{{$row-> email}}</td>
                  <td>{{$row-> mailing}}</td>
                  <td style='background-color:#EEFCFF'></td>
                  <td><a href="{{route('editar_cliente',$row->idcliente)}}"><i class='fas fa-pencil-alt'></i></a></td>
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

@section('js')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
<script>
  $('#example2').DataTable({
    responsive: true,
    autoWidth: false,
    "language": {
      "lengthMenu": "Mostrar " +
        `<select class = "custom-select custom-select-sm form-control form-control-sm">
                            <option value = '5'>5</option>
                            <option value = '10'>10</option>
                            <option value = '25'>25</option>
                            <option value = '50'>50</option>
                            <option value = '-1'>All</option>
                          </select>` +
        "registros por página",
      "zeroRecords": "Nada encontrado - lo siento",
      "info": "Mostrando la página _PAGE_ of _PAGES_",
      "infoEmpty": "Sin registros disponibles",
      "infoFiltered": "(filtrado do _MAX_ registros totales)",
      'search': 'Buscar:',
      'paginate': {
        'nest': 'Siguiente',
        'previous': 'Anterior'
      }
    }
  });
</script>
@stop