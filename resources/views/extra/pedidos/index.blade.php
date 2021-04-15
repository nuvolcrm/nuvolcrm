@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
    <div class="container-fluid">
        <div class="venta">
            <div class="col-sm">
                <h1>Pedidos <a href="{{ route('extra.pedidos.create') }}" class="rounded-circle btn btn-primary"><i
                            class="fas fa-plus"></i></a></h1>
            </div>
        </div>
    </div>

@stop

@section('content')
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
                                    <th>Teléfono</th>
                                    <th>Población</th>
                                    <th>Servicios</th>
                                    <th>Cuota</th>
                                    <th>Detalle</th>
                                    <th><i class='far fa-file-pdf'></i></th>
                                    <th>Operaciones</th>
                                    <th>Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedidos as $pedido)
                                    <tr>
                                        <td>
                                            {{ $pedido->idPedido }}
                                        </td>
                                        <td>
                                            {{ $pedido->estado }}
                                        </td>
                                        <td>
                                            {{ $pedido->cantidad }}
                                        </td>
                                        <td>
                                            {{ $pedido->producto }}
                                        </td>
                                        <td>
                                            {{ $pedido->cliente }}
                                        </td>
                                        <td>
                                            {{ $pedido->telefono }}
                                        </td>
                                        <td>
                                            {{ $pedido->email }}
                                        </td>
                                        <td>
                                            {{ $pedido->pvp }}
                                        </td>
                                        <td>
                                            {{ $pedido->pagado }}
                                        </td>
                                        <td>
                                            {{ $pedido->observaciones }}
                                        </td>
                                        <td>
                                            {{ $pedido->fecha }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
            "order": [
                [11, "desc"]
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
