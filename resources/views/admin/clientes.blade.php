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
        <h1>Clientes <a href="crear_clientes" class="rounded-circle btn btn-primary"><i class="fas fa-plus"></i></a></h1>
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
                            <td><img width="100%" src="https://nuvolcrm.movy.es/vendor/adminlte/dist/img/idiomas/<?php echo $row-> idioma?>.png"><br>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36"><path fill="#C60A1D" d="M36 27c0 2.209-1.791 4-4 4H4c-2.209 0-4-1.791-4-4V9c0-2.209 1.791-4 4-4h28c2.209 0 4 1.791 4 4v18z"/><path fill="#FFC400" d="M0 12h36v12H0z"/><path fill="#EA596E" d="M9 17v3c0 1.657 1.343 3 3 3s3-1.343 3-3v-3H9z"/><path fill="#F4A2B2" d="M12 16h3v3h-3z"/><path fill="#DD2E44" d="M9 16h3v3H9z"/><ellipse fill="#EA596E" cx="12" cy="14.5" rx="3" ry="1.5"/><ellipse fill="#FFAC33" cx="12" cy="13.75" rx="3" ry=".75"/><path fill="#99AAB5" d="M7 16h1v7H7zm9 0h1v7h-1z"/><path fill="#66757F" d="M6 22h3v1H6zm9 0h3v1h-3zm-8-7h1v1H7zm9 0h1v1h-1z"/></svg><br>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36"><path fill="#00247D" d="M0 9.059V13h5.628zM4.664 31H13v-5.837zM23 25.164V31h8.335zM0 23v3.941L5.63 23zM31.337 5H23v5.837zM36 26.942V23h-5.631zM36 13V9.059L30.371 13zM13 5H4.664L13 10.837z"/><path fill="#CF1B2B" d="M25.14 23l9.712 6.801c.471-.479.808-1.082.99-1.749L28.627 23H25.14zM13 23h-2.141l-9.711 6.8c.521.53 1.189.909 1.938 1.085L13 23.943V23zm10-10h2.141l9.711-6.8c-.521-.53-1.188-.909-1.937-1.085L23 12.057V13zm-12.141 0L1.148 6.2C.677 6.68.34 7.282.157 7.949L7.372 13h3.487z"/><path fill="#EEE" d="M36 21H21v10h2v-5.836L31.335 31H32c1.117 0 2.126-.461 2.852-1.199L25.14 23h3.487l7.215 5.052c.093-.337.158-.686.158-1.052v-.058L30.369 23H36v-2zM0 21v2h5.63L0 26.941V27c0 1.091.439 2.078 1.148 2.8l9.711-6.8H13v.943l-9.914 6.941c.294.07.598.116.914.116h.664L13 25.163V31h2V21H0zM36 9c0-1.091-.439-2.078-1.148-2.8L25.141 13H23v-.943l9.915-6.942C32.62 5.046 32.316 5 32 5h-.663L23 10.837V5h-2v10h15v-2h-5.629L36 9.059V9zM13 5v5.837L4.664 5H4c-1.118 0-2.126.461-2.852 1.2l9.711 6.8H7.372L.157 7.949C.065 8.286 0 8.634 0 9v.059L5.628 13H0v2h15V5h-2z"/><path fill="#CF1B2B" d="M21 15V5h-6v10H0v6h15v10h6V21h15v-6z"/></svg><br>
                            
                            </td>
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
