<?php

use Illuminate\Support\Facades\DB;
use Iluminate\Pagination\Paginator;

$clients = DB::table('clients')
    ->orderBy('id', 'desc')
    ->take(5)
    ->get();

$presupuestos = DB::table('presupuestos')
    ->join('clients', 'clients.id', '=', 'presupuestos.idCliente')
    ->orderBy('presupuestos.idPresupuesto', 'desc')
    ->take(5)
    ->get();

$ventas = DB::table('ventas')
    ->join('clients', 'clients.id', '=', 'ventas.idCliente')
    ->orderBy('idVenta', 'desc')
    ->take(5)
    ->get();
?>

@extends('adminlte::page')

@section('title', 'Escritorio')

@section('content_header')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <h1>Escritorio</h1>
        </div>
    </div>
</div>
@stop

@section('content')

<!-- Main content -->
<section class="content">

    {{--<div class="row">
        <div class="col-lg-2 col-sm-5">
            <div class="small-box bg-success">
                <div class="icon">
                <div class="icon">
                    <h3>3847<sup style="font-size: 20px"></sup></h3>
                    <h5>Ingresosxx</h5>
                </div>
                <div class="icon">
                    <i class="fas fa-euro-sign"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-sm-5">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>28<sup style="font-size: 20px"></sup></h3>
                    <h5>Fibras</h5>
                </div>
                <div class="icon">
                    <i class="fas fa-wifi"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-sm-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>85<sup style="font-size: 20px"></sup></h3>
                    <h5>Móviles</h5>
                </div>
                <div class="icon">
                    <i class="fas fa-mobile"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-sm-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>27<sup style="font-size: 20px"></sup></h3>
                    <h5>Clientes</h5>
                </div>
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-sm-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>12<sup style="font-size: 20px"></sup></h3>
                    <h5>Presupuestos</h5>
                </div>
                <div class="icon">
                    <i class="fas fa-calculator"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-sm-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>128<sup style="font-size: 20px"></sup></h3>
                    <h5>Emails</h5>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper"></i>
                </div>
            </div>
        </div>
    </div>--}}

    <div class="row">
        <div class="col-md-2">
            <!-- /.card -->
            <div class="card bg-success">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="box-header with-border">
                        <h1><strong>3847</strong>&nbsp;<i class="fas fa-euro-sign"></i></h1>
                        <h3>Ingresos</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <!-- /.card -->
            <div class="card bg-primary">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="box-header with-border">
                        <h1><strong>28</strong>&nbsp;<i class="fas fa-wifi"></i></h1>
                        <h3>Fibras</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <!-- /.card -->
            <div class="card bg-danger">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="box-header with-border">
                        <h1><strong>85</strong>&nbsp;<i class="fas fa-mobile"></i></h1>
                        <h3>Móviles</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <!-- /.card -->
            <div class="card bg-warning">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="box-header with-border">
                        <h1><strong>27</strong>&nbsp;<i class="fas fa-user"></i></h1>
                        <h3>Clientes</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <!-- /.card -->
            <div class="card bg-secondary">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="box-header with-border">
                        <h1><strong>12</strong>&nbsp;<i class="fas fa-calculator"></i></h1>
                        <h3>Presupuestos</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <!-- /.card -->
            <div class="card bg-info">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="box-header with-border">
                        <h1><strong>128</strong>&nbsp;<i class="fas fa-newspaper"></i></h1>
                        <h3>Emails</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- 5 ULTIMOS CLIENTES -->
                    <div class="box-header with-border">
                        <h4 class="box-title text-primary"><i class="fas fa-users"></i>&nbsp;<strong>last 5 Clientes</strong></h4>
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
                                        <th>#</th>
                                        <th>Nombre y apellidos</th>
                                        <!-- <th class="text-right">Ingresos</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($orden = 1)
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
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{ route('clients.create') }}" class="btn btn-sm btn-primary pull-left">Nuevo
                            Cliente</a>
                        <a href="{{ route('clients.index') }}" class="btn btn-sm btn-default pull-right">Ver
                            todo</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.box-footer -->

        <div class="col-md-4">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">

                    <!-- 5 ULTIMOS PRESUPUESTOS -->

                    <div class="box-header with-border">
                        <h4 class="box-title text-primary"><i class="fas fa-calculator"></i>&nbsp;<strong>last 5 presupuestos</strong></h4>
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
                                        <th>#</th>
                                        <th>Nombre y apellidos</th>
                                        <th class="text-right">Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($orden = 1)
                                    @foreach ($presupuestos as $pre)

                                    <tr>
                                        <td>{{ $orden }}</td>
                                        <td>{{ $pre->nombre . ' ' . $pre->apellido1 . ' ' . $pre->apellido2 }}
                                        </td>
                                        <td class="text-right"><span class="label label-success">39<sup>90</sup>€</span>
                                        </td>
                                    </tr>
                                    @php($orden++)
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{ route('presupuestos.create') }}" class="btn btn-sm btn-primary pull-left">Nuevo
                            presupuesto</a>
                        <a href="{{ route('presupuestos.index') }}" class="btn btn-sm btn-default pull-right">Ver todo</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.box-footer -->

        <div class="col-md-4">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">


                    <!-- 5 ULTIMAS VENTAS -->

                    <div class="box-header with-border">
                        <h4 class="box-title text-primary"><i class="far fa-handshake"></i>&nbsp;<strong>last 5 ventas</strong></h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-responsive-xl table-md text-md">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre y apellidos</th>
                                        <th class="text-right">Cuota</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($orden = 1)
                                    @foreach ($ventas as $ven)
                                    <tr>
                                        <td>{{ $orden }}</td>
                                        <!-- <td>Másmóvil</td> -->
                                        <td>{{ $ven->nombre . ' ' . $ven->apellido1 . ' ' . $ven->apellido2 }}
                                        </td>
                                        <td class="text-right"><span class="label label-success">39<sup>90</sup>€</span></td>
                                    </tr>
                                    @php($orden++)
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary pull-left">Nueva venta</a>
                        <a href="{{ route('ventas.index') }}" class="btn btn-sm btn-default pull-right">Ver todo</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.box-footer -->


    </div>

    <div class="row">
        <div class="col-md-4">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- 5 OPERADORES POR INGRESOS -->
                    <div class="box-header with-border">
                        <h4 class="box-title text-primary"><i class="fas fa-piggy-bank"></i>&nbsp;<strong>top 5 ingresos</strong></h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-responsive-xl table-md text-md">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th></th>
                                        <th>Operador</th>
                                        <th class="text-right">Ingresos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <th><img src="img/masmovil.jpg" height="30"></img></th>
                                        <td>Másmóvil</td>
                                        <td class="text-right"><span class="label label-success">1.050 €</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <th><img src="img/lowi.png" height="30"></img></th>
                                        <td>Lowi</td>
                                        <td class="text-right"><span class="label label-warning">937 €</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <th><img src="img/masmovilNegocios.png" height="30"></img></th>
                                        <td>Másmóvil PRO</td>
                                        <td class="text-right"><span class="label label-danger">458 €</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <th><img src="img/digi.jpg" height="30"></img></th>
                                        <td>Digi</td>
                                        <td class="text-right"><span class="label label-info">299 €</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <th><img src="img/pepephone.png" height="30"></img></th>
                                        <td>Pepephone</td>
                                        <td class="text-right"><span class="label label-warning">245 €</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- <div class="box-footer clearfix"><a href="javascript:void(0)"
                                                        class="btn btn-sm btn-default pull-right">Ver todo</a>
                                                </div> -->
                </div>
            </div>

            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <p class="text-center">
                        <strong>Ingresos: 01/{{ date('m') }}/{{ date('Y') }} a
                            {{ date('d') }}/{{ date('m') }}/{{ date('Y') }}</strong>
                    </p>

                    <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" style="height: 100px; width: 1192px;" height="100" width="1192"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                </div>
            </div>
        </div>

        <!-- /.box-footer -->


        <div class="col-md-4">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">

                    <!-- 5 OPERADORES POR FIBRAS -->

                    <div class="box-header with-border">
                        <h4 class="box-title text-primary"><i class="fas fa-wifi"></i>&nbsp;<strong>top 5 fibras</strong></h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-responsive-xl table-md text-md">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th></th>
                                        <th>Operador</th>
                                        <th class="text-right">Fibras</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <th><img src="img/masmovil.jpg" height="30"></img></th>
                                        <td>Másmóvil</td>
                                        <td class="text-right"><span class="label label-success">9</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <th><img src="img/lowi.png" height="30"></img></th>
                                        <td>Lowi</td>
                                        <td class="text-right"><span class="label label-warning">6</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <th><img src="img/o2.jpg" height="30"></img></th>
                                        <td>O2</td>
                                        <td class="text-right"><span class="label label-danger">4</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <th><img src="img/digi.jpg" height="30" width="30"></img></th>
                                        <td>Digi</td>
                                        <td class="text-right"><span class="label label-info">3</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <th><img src="img/movistar.jpg" height="30"></img></th>
                                        <td>Movistar</td>
                                        <td class="text-right"><span class="label label-warning">2</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- <div class="box-footer clearfix"> <a href="javascript:void(0)"
                                                        class="btn btn-sm btn-default pull-right">Ver todo</a>
                                                </div> -->
                </div>
            </div>

            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <p class="text-center">
                        <strong>Fibras: 01/{{ date('m') }}/{{ date('Y') }} a
                            {{ date('d') }}/{{ date('m') }}/{{ date('Y') }}</strong>
                    </p>

                    <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" style="height: 100px; width: 1192px;" height="100" width="1192"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                </div>
            </div>

        </div>
        <!-- /.box-footer -->


        <div class="col-md-4">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- 5 OPERADORES POR MOVILES -->

                    <div class="box-header with-border">
                        <h4 class="box-title text-primary"><i class="fas fa-mobile-alt"></i>&nbsp;<strong>top 5 móviles</strong></h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-responsive-xl table-md text-md">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th></th>
                                        <th>Operador</th>
                                        <th class="text-right">Móviles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <th><img src="img/masmovil.jpg" height="30"></img></th>
                                        <td>Másmóvil</td>
                                        <td class="text-right"><span class="label label-success">17</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <th><img src="img/lowi.png" height="30"></img></th>
                                        <td>Lowi</td>
                                        <td class="text-right"><span class="label label-warning">17</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <th><img src="img/llamaya.png" height="30"></img></th>
                                        <td>LlamaYá</td>
                                        <td class="text-right"><span class="label label-danger">13</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <th><img src="img/o2.jpg" height="30"></img></th>
                                        <td>O2</td>
                                        <td class="text-right"><span class="label label-info">11</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <th><img src="img/digi.jpg" height="30"></img></th>
                                        <td>Digi</td>
                                        <td class="text-right"><span class="label label-warning">10</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- <div class="box-footer clearfix">
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-default pull-right">Ver todo</a>
                                                </div> -->


                    <!-- /.box-footer -->

                </div>
            </div>

            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <p class="text-center">
                        <strong>Móviles: 01/{{ date('m') }}/{{ date('Y') }} a
                            {{ date('d') }}/{{ date('m') }}/{{ date('Y') }}</strong>
                    </p>

                    <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" style="height: 100px; width: 1192px;" height="100" width="1192"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                </div>
            </div>
        </div>
    </div>
</section>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<!-- SCRIPTS (revisar) -->
<script src="dist/js/adminlte.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="resources/js/Chart.js"></script>
<script src="dist/js/pages/dashboard2.js"></script>
<script src="dist/js/demo.js"></script>
@stop