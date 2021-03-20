<?php
use Illuminate\Support\Facades\DB;
use Iluminate\Pagination\Paginator;

$presupuestos = DB::table('presupuesto')
            ->join('clientes', 'clientes.idcliente', '=', 'presupuesto.idcliente')
            ->orderBy('presupuesto.idpresupuesto', 'desc')
            ->get();
?>
@extends('adminlte::page')

@section('title', 'Presupuestos')

@section('content_header')
    <h1>Presupuestos <a href="{{ route('crear_clientes') }}" class="rounded-circle btn btn-primary"><i class="fas fa-plus"></i></a></h1>
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
                            <th>ID</th>
                            <th>FECHA</th>
                            <th>CLIENTE</th>
                            <th><a class='fas fa-phone-square-alt'></th>
                            <th>TELEFONO</th>
                            <th>POBLACION</th>
                            <th>SERVICIOS</th>
                            <th>TOTAL</th>
                            <th>VER</th>
                            <th>PDF</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>VALOR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($presupuestos as $pre) { 
                        ?>
                        <tr>
                            <td><?php echo $pre -> numpresupuesto?></td>
                            <td><?php echo $pre -> fecha?></td>
                            <td><?php echo $pre -> nombre,' ',$pre-> apellido1,' ',$pre-> apellido2?></td>
                            <td><a class='fas fa-phone-square-alt' href="tel:{{$pre->telefono}}"></td>
                            <td><?php echo $pre-> telefono?></td>
                            <td><?php echo $pre-> poblacion?></td>
                            <td><img height='20px' src='../public/favicons/fibra1.svg'>  <img height='20px' src='../public/favicons/movil1.svg'></td>
                            <td></td>
                            <td>
                                <button-sm type='button' id='presupuesto' class='btn-sm alert-light' data-toggle='modal' data-id='' data-target='#miModal' onclick='mostrarid(this.value);' value=''>
                                <i class='far fa-list-alt'></i>
                                </button>
                            </td>
                            <td>
                                <button-sm class='btn-sm alert-light'>
                                <a target='_blank' href=''>
                                <i class='far fa-file-pdf'></i>
                              </button>
                            </td>
                            <td>
                                <form method='POST' action=''>
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
                                </form>
                            </td>
                            <td style='background-color:#EEFCFF'></td>
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
