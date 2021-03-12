@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<div class="col-sm-4">
    <h1>Clientes</h1>
    
    <a href="clientes_nuevo.php" class="btn btn-success">Nuevo Cliente</a>
</div>
@stop
<?php
    $link = new PDO('mysql:host=138.68.138.156;dbname=nuvolcrm', 'forge', 'sBeywveCYpdkgajGCFXN');
?>
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
                            foreach ($link->query('SELECT * from cliente') as $row){
                              $idioma = $row['idioma'];
                              $idiomas = strtolower($idioma);
                        ?>
                        <tr>
                            <td><?php echo $row['dni']?></td>
                            <td><?php echo $row['nombre'],' ',$row['apellido1'],' ',$row['apellido2']?></td>
                            <td><img width="100%" src="../public/vendor/adminlte/dist/img/idiomas/<?php echo $idiomas?>.png"></td>
                            <td><?php echo $row['alias']?></td>
                            <td><a class='fas fa-phone-square-alt' href=" tel:<?php echo $row['telefono']?>"></td>
                            <td><?php echo $row['telefono']?></td>
                            <td><a class='fab fa-whatsapp' href="https://api.whatsapp.com/send?phone=34<?php echo $row['telefono']?>"></td>
                            <td><?php echo $row['direccion']?></td>
                            <td><?php echo $row['poblacion']?></td>
                            <td><?php echo $row['fecha_nacimiento']?></td>
                            <td><?php echo $row['segmento']?></td>
                            <td><a class='far fa-envelope' href=" mailto:<?php echo $row['email']?>"></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['dni']?></td>
                            <td style='background-color:#EEFCFF'><?php echo $row['dni']?></td>
                            <td><a href="admin/{{ $row['idcliente'] }}/editar_cliente"><i class='fas fa-pencil-alt'></i></a></td>
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
