<?php
use Illuminate\Support\Facades\DB;

$clientes = DB::table('cliente')->get();
?>
@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
 
<div class="container-fluid">
  <div class="row">
    <div class="col-sm">
        <h1>Clientes <a href="/Nuvolcrm/public/crear_clientes" class="rounded-circle btn btn-primary"><i class="fas fa-plus"></i></a></h1>
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
                            <td><img width="100%" src="https://nuvolcrm.movy.es/vendor/adminlte/dist/img/idiomas/<?php echo $row-> idioma?>.png"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36"><path fill="#C60A1D" d="M36 27c0 2.209-1.791 4-4 4H4c-2.209 0-4-1.791-4-4V9c0-2.209 1.791-4 4-4h28c2.209 0 4 1.791 4 4v18z"/><path fill="#FFC400" d="M0 12h36v12H0z"/><path fill="#EA596E" d="M9 17v3c0 1.657 1.343 3 3 3s3-1.343 3-3v-3H9z"/><path fill="#F4A2B2" d="M12 16h3v3h-3z"/><path fill="#DD2E44" d="M9 16h3v3H9z"/><ellipse fill="#EA596E" cx="12" cy="14.5" rx="3" ry="1.5"/><ellipse fill="#FFAC33" cx="12" cy="13.75" rx="3" ry=".75"/><path fill="#99AAB5" d="M7 16h1v7H7zm9 0h1v7h-1z"/><path fill="#66757F" d="M6 22h3v1H6zm9 0h3v1h-3zm-8-7h1v1H7zm9 0h1v1h-1z"/></svg></td>
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
