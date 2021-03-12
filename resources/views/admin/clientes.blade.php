<?php
use Illuminate\Support\Facades\DB;

$clientes = DB::table('cliente')->get();
?>
@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<div class="col-sm-4">
    <h1>Clientes</h1>
</div>
<div class="col-sm-4">
    <a href="/Nuvolcrm/public/crear_clientes" class="rounded btn btn-success">+</a>
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
                            <td><?php echo $row -> dni ?></td>
                            <td><?php echo $row -> nombre,' ',$row-> apellido1,' ',$row-> apellido2?></td>
                            <!--<td><img width="100%" src="{{asset('/vendor/adminlte/dist/img/idiomas/<?php echo $row-> idioma?>.png')}}"></td>-->
                            <td><img width="100%" src="'vendor/adminlte/dist/img/idiomas/<?php echo $row-> idioma?>.png'"></td>
                            <td><?php echo $row-> alias?></td>
                            <td><a class='fas fa-phone-square-alt' href=" tel:<?php echo $row-> telefono?>"></td>
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
                            <td><a href="admin/{{ $row-> idcliente }}/editar_cliente"><i class='fas fa-pencil-alt'></i></a></td>
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
