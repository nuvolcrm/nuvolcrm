@extends('adminlte::page')

@section('title', 'Presupuestos')

@section('content_header')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <h1>
                Tarifas
                <a href="{{ route('gestion.tarifas.create') }}" class="rounded-circle btn btn-primary">
                    <i class="fas fa-plus"></i>
                </a>
            </h1>
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
                                <th>OPERADOR</th>
                                <th></th>
                                <th></th>
                                <th>DESCRIPCION</th>
                                <th>DESCRIPCION LARGA</th>
                                <th>CUOTA</th>
                                <th>DATOS</th>
                                <th>LLAMADAS</th>
                                <th>VELOCIDAD FIBRA</th>
                                <th>PORTA</th>
                                <th>NUEVA</th>
                                <th>MIGRA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tarifas as $tarifa)
                                <tr>
                                    <td><img src="../img/{{ $tarifa->logo }}" height="40"></td>
                                    <td><i class='{{ $tarifa->imagen }} text-primary'></i></td>
                                    <td>{{ $tarifa -> nombreTarifa}}</td>
                                    <td>{{ $tarifa -> descripcion}}</td>
                                    <td>{{ $tarifa -> descripcion_larga}}</td>
                                    <td>{{ $tarifa -> cuota}} €</td>
                                    <td>{{ $tarifa -> datos}}</td>
                                    <td>{{ $tarifa -> llamadas}}</td>
                                    <td>
                                        @if ($tarifa -> velocidad)
                                            {{ $tarifa -> velocidad}}MB
                                        @endif
                                    </td>
                                    <td>{{ $tarifa -> comision_portabilidad}}</td>
                                    <td>{{ $tarifa -> comision_nueva}}</td>
                                    <td>{{ $tarifa -> comision_migra}}</td>
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