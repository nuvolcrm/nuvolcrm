@extends('adminlte::page')

@section('title', 'Ventas')

@section('content_header')
    <div class="container-fluid">
        <div class="venta">
            <div class="col-sm">
                <h1>Ventas <a href="{{ route('ventas.create') }}" class="rounded-circle btn btn-primary"><i
                            class="fas fa-plus"></i></a></h1>
            </div>
        </div>
    </div>

@stop

@section('content')

    <body>
        <!-- Main content -->
        <section class="content">
            <div class="venta">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-hover table-responsive table-md text-sm">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Id</th>
                                        <th>Operador</th>
                                        <th>Tarifa</th>
                                        <th></th>
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
                                        <th><i class="far fa-eye"></i></th>
                                        <th><i class="fas fa-exclamation-triangle"></i></th>
                                        <th>Comisión</th>
                                        <th>Extra</th>
                                        <th>Balance</th>
                                        <th>Vendedor</th>
                                        <th><i class='fas fa-pencil-alt'></i></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($ventas as $venta)
                                        <tr>
                                            <td>{{ $venta->idVenta }}</td>
                                            <td><img src="img/{{ $venta->logo }}" height="40" alt="{{ $venta->nombreOperador }}"></img></td>
                                            <td>{{ $venta->descripcion }}</td>
                                            <td>
                                                <i class='{{ $venta->imagen }} text-primary'></i>
                                                </td>
                                            <td class="text-right">{{ $venta->cuota }}&nbsp€</td>
                                            <td>{{ $venta->dni }}</td>
                                            <td><a href="clients/{{ $venta->id }}"><i class='fas fa-user'></i></a></td>
                                            <td>
                                                @if ($venta->alias != '')
                                                    ("{{ $venta->alias }}")
                                                @endif
                                                {{ $venta->nombre . ' ' . $venta->apellido1 . ' ' . $venta->apellido2 }}
                                            </td>
                                            <td>
                                                @if ($venta->idioma === 'Valenciano')
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/df/Flag_of_the_Land_of_Valencia_%28official%29.svg"
                                                        alt="Valenciano" width="20" height="15">
                                                @elseif ($venta-> idioma === 'Español')
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Bandera_de_Espa%C3%B1a_%28nuevo_dise%C3%B1o%29.svg"
                                                        alt="Español" width="20" height="15">
                                                @elseif ($venta-> idioma === 'Ingles')
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Flag_of_the_United_Kingdom.svg"
                                                        alt="Ingles" width="20" height="15">
                                                @else
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b0/No_flag.svg"
                                                        alt="NO" width="20" height="15">
                                                @endif
                                            </td>
                                            <td>{{ $venta->usuario }}</td>
                                            <td>{{ $venta->linea }}</td>
                                            <td>{{ $venta->fecha_alta }}</td>
                                            <td>{{ $venta->tipoalta }}</td>
                                            <td>{{ $venta->fecha_activa }}</td>
                                            <td><span class="badge badge-info">conf</span></td>
                                            <td>{{ $venta->fecha_sale }}</td>
                                            <td>
                                                @if ($venta->observaciones != '')
                                                    <i class="far fa-eye text-warning"></i>
                                                @else
                                                    <i class="far fa-eye text-muted"></i>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($venta->incidencias != '')
                                                    <i class="fas fa-exclamation-triangle text-danger"></i>
                                                @else
                                                    <i class="fas fa-exclamation-triangle text-muted"></i>
                                                @endif
                                            </td>
                                            <td class="bg-info text-right">{{ $venta->comision }}</td>
                                            <td class="bg-info text-right">{{ $venta->extracomision }}</td>
                                            <td class="bg-info text-right">Balance</td>
                                            <td class="bg-info">{{ $venta->idColaborador }}</td>
                                            <td><a href="{{ route('ventas.edit', $venta->idVenta) }}"><i class='fas fa-pencil-alt primary'></i></a></td>
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
