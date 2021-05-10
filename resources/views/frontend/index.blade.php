<?php
use App\Models\fibra;
use App\Models\moviles;
use App\Models\fibras_moviles;
use Illuminate\Support\Facades\DB;

    $fibras = fibra::all();
    $moviles = moviles::all();
    $fibras_moviles = fibras_moviles::all();
?>
@extends('adminlte::page')

@section('title', 'FrontEnd')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>
                    Front End
                    {{-- <a href="{{ route('frontend.create') }}" class="rounded-circle btn btn-primary">
                        <i class="fas fa-plus"></i>
                    </a> --}}
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
        {{-- ofertas fibra+movil --}}
        <div class="col-md-4">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- OFERTAS FIBRA+MOVIL-->
                    <div class="box-header with-border">
                        <h4 class="box-title text-primary"><i class="fas fa-users"></i>&nbsp;<strong>OFERTAS FIBRA+MOVIL</strong></h4>
                        <!--
                                <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                                -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-responsive-xl table-md text-md">
                                <thead>
                                        <tr>
                                            <th>Precio</th>
                                            <th>Titulo</th>
                                            <th>Descripción</th>
                                            <!-- <th class="text-right">Ingresos</th> -->
                                        </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fibras_moviles as $fib_mov)
                                    <tr>
                                        <td>€{{ $fib_mov->precio }}/MES</td>
                                        <td>{{ $fib_mov->titulo }}</td>
                                        <td>{{ $fib_mov->descripcion1 }}</td>
                                        <td><a href="{{ route('frontend.edit', $fib_mov->id) }}"><i
                                            class='fas fa-pencil-alt'></i></a></td>
                                        <td><a href="{{ route('frontend.destroy', $fib_mov->id) }}"><i
                                            class='fas fa-trash-alt'></i></a></td>
                                    </tr>
                                        {{-- @php($orden = 1)
                                        @foreach ($operadores as $op)
                                        <tr>
                                            <td>{{ $orden }}</td>
                                            <td>
                                                @if ($op -> alias <> '')
                                                    ("{{ $op -> alias }}")
                                                    @endif
                                                    {{ $op -> nombre.' '.$op-> apellido1.' '.$op-> apellido2 }}</td> <!-- <td class="text-right"><span class="label label-success">1050,13 €</span></td> -->
                                        </tr>
                                        @php($orden++)
                                        @endforeach --}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{ route('frontend.create') }}" class="btn btn-sm btn-primary pull-left">Nueva Oferta</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- ofertas fibra --}}
        <div class="col-md-4">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- OFERTAS FIBRA-->
                    <div class="box-header with-border">
                        <h4 class="box-title text-primary"><i class="fas fa-users"></i>&nbsp;<strong>OFERTAS FIBRA</strong></h4>
                        <!--
                                <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                                -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-responsive-xl table-md text-md">
                                <thead>
                                    <tr>
                                        <th>Precio</th>
                                        <th>Titulo</th>
                                        <th>Descripción</th>
                                        <!-- <th class="text-right">Ingresos</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fibras as $fibra)
                                    <tr>
                                        <td>€{{ $fibra->precio }}/MES</td>
                                        <td>{{ $fibra->titulo }}</td>
                                        <td>{{ $fibra->descripcion1 }}</td>
                                        <td><a href="{{ route('frontend.edit1', $fibra->id) }}"><i
                                            class='fas fa-pencil-alt'></i></a></td>
                                        <td><a href="{{ route('frontend.destroy1', $fibra->id) }}"><i
                                            class='fas fa-trash-alt'></i></a></td>
                                    </tr>
                                    @endforeach
                                    {{-- @php($orden = 1)
                                    @foreach ($clients as $cli)
                                    <tr>
                                        <td>{{ $orden }}</td>
                                        <td>
                                            @if ($cli -> alias <> '')
                                                ("{{ $cli -> alias }}")
                                                @endif
                                                {{ $cli -> nombre.' '.$cli-> apellido1.' '.$cli-> apellido2 }}</td> <!-- <td class="text-right"><span class="label label-success">1050,13 €</span></td> -->
                                    </tr>
                                    @php($orden++)
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{ route('frontend.create1') }}" class="btn btn-sm btn-primary pull-left">Nueva Oferta</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- ofertas movil --}}
        <div class="col-md-4">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- OFERTAS MOVIL-->
                    <div class="box-header with-border">
                        <h4 class="box-title text-primary"><i class="fas fa-users"></i>&nbsp;<strong>OFERTAS MOVIL</strong></h4>
                        <!--
                                <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                                -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-responsive-xl table-md text-md">
                                <thead>
                                    <tr>
                                        <th>Precio</th>
                                        <th>Titulo</th>
                                        <th>Descripcion</th>
                                        <!-- <th class="text-right">Ingresos</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($moviles as $movil)
                                    <tr>
                                        <td>€{{ $movil->precio }}/MES</td>
                                        <td>{{ $movil->titulo }}</td>
                                        <td>{{ $movil->descripcion1 }}</td>
                                        <td><a href="{{ route('frontend.edit2', $movil->id) }}"><i
                                            class='fas fa-pencil-alt'></i></a></td>
                                        <td><a href="{{ route('frontend.destroy2', $movil->id) }}"><i
                                            class='fas fa-trash-alt'></i></a></td>
                                    </tr>
                                    @endforeach
                                    {{-- @php($orden = 1)
                                    @foreach ($clients as $cli)
                                    <tr>
                                        <td>{{ $orden }}</td>
                                        <td>
                                            @if ($cli -> alias <> '')
                                                ("{{ $cli -> alias }}")
                                                @endif
                                                {{ $cli -> nombre.' '.$cli-> apellido1.' '.$cli-> apellido2 }}</td> <!-- <td class="text-right"><span class="label label-success">1050,13 €</span></td> -->
                                    </tr>
                                    @php($orden++)
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{ route('frontend.create2') }}" class="btn btn-sm btn-primary pull-left">Nueva Oferta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
