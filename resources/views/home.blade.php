<?php

use Illuminate\Support\Facades\DB;
use Iluminate\Pagination\Paginator;

$clientes = DB::table('clientes')
            ->orderBy('idCliente', 'desc')
            ->take(5)
            ->get();

$presupuestos = DB::table('presupuestoS')
            ->join('clientes', 'clientes.idCliente', '=', 'presupuestos.idCliente')
            ->orderBy('presupuestos.idpresupuesto', 'desc')
            ->take(5)
            ->get();

$ventas = DB::table('ventas')
            ->join('clientes', 'clientes.idCliente', '=', 'ventas.idCliente')
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


<body>
    <!-- Main content -->
    <section class="content">
        
    <div class="row">
            <div class="col-md-4">
                <!-- /.card -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">


                        <!-- 5 ULTIMOS CLIENTES -->

                        <div class="box-header with-border">
                            <h3 class="box-title text-primary"><i class="fas fa-users"></i>&nbsp;Últimos 5 Clientes</h3>
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
                                    @php($orden=1)
                                    @foreach ($clientes as $cli)
                                        <tr>
                                            <td>{{ $orden }}</td>
                                            <td>{{ $cli -> nombre.' '.$cli-> apellido1.' '.$cli-> apellido2 }}</td>
                                            <!-- <td class="text-right"><span class="label label-success">1050,13 €</span></td> -->
                                        </tr>
                                    @php ($orden++)
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <a href="{{ route('crear_clientes') }}" class="btn btn-sm btn-primary pull-left">Nuevo Cliente</a>
                            <a href="{{ route('clientes') }}" class="btn btn-sm btn-default pull-right">Ver todo</a>
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
                            <h3 class="box-title"><i class="fas fa-calculator"></i>&nbsp;Últimos 5 presupuestos</h3>
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
                                <table class="table no-margin">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre y apellidos</th>
                                            <th class="text-right">Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php($orden=1)
                                    @foreach ($presupuestos as $pre)

                                        <tr>
                                            <td>{{ $orden }}</td>
                                            <td>{{ $pre -> nombre.' '.$pre-> apellido1.' '.$pre-> apellido2 }}</td>
                                            <td class="text-right"><span class="label label-success">39<sup>90</sup>€</span></td>
                                        </tr>
                                    @php ($orden++)
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <a href="javascript:void(0)" class="btn btn-sm btn-primary pull-left">Nuevo presupuesto</a>
                            <a href="{{ route('presupuestos') }}" class="btn btn-sm btn-default pull-right">Ver todo</a>
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
                            <h3 class="box-title"><i class="fas fa-table"></i>&nbsp;Últimas 5 ventas</h3>
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
                                <table class="table no-margin">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre y apellidos</th>
                                            <th class="text-right">Cuota</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($orden=1)
                                        @foreach ($ventas as $ven)
                                        <tr>
                                            <td>{{ $orden }}</td>
                                            <!-- <td>Másmóvil</td> -->
                                            <td>{{ $ven -> nombre.' '.$ven-> apellido1.' '.$ven-> apellido2 }}</td>
                                            <td class="text-right"><span class="label label-success">39<sup>90</sup>€</span></td>
                                        </tr>
                                        @php ($orden++)
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <a href="javascript:void(0)" class="btn btn-sm btn-primary pull-left">Nueva venta</a>
                            <a href="javascript:void(0)" class="btn btn-sm btn-default pull-right">Ver todo</a>
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
                            <h3 class="box-title"><i class="fas fa-piggy-bank"></i>&nbsp;Ingresos: 2.897 €</h3>
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
                                <table class="table no-margin">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Operador</th>
                                            <th class="text-right">Ingresos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">1</a></td>
                                            <td>Másmóvil</td>
                                            <td class="text-right"><span class="label label-success">1.050 €</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">2</a></td>
                                            <td>Lowi</td>
                                            <td class="text-right"><span class="label label-warning">937 €</span></td>

                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">3</a></td>
                                            <td>Másmóvil PRO</td>
                                            <td class="text-right"><span class="label label-danger">458 €</span></td>

                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">4</a></td>
                                            <td>Digi</td>
                                            <td class="text-right"><span class="label label-info">299 €</span></td>

                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">5</a></td>
                                            <td>Pepephone</td>
                                            <td class="text-right"><span class="label label-warning">245 €</span></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <!--
                    <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                    -->
                            <a href="javascript:void(0)" class="btn btn-sm btn-default pull-right">Ver todo</a>
                        </div>
                    </div>
                </div>

                <!-- /.card -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <p class="text-center">
                            <strong>Ingresos: 01/{{ date('m') }}/{{ date('Y') }} a {{date('d') }}/{{ date('m') }}/{{ date('Y') }}</strong>
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
                            <h3 class="box-title"><i class="fas fa-wifi"></i>&nbsp;Fibras: 26</h3>
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
                                <table class="table no-margin">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Operador</th>
                                            <th class="text-right">Fibras</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">1</a></td>
                                            <td>Másmóvil</td>
                                            <td class="text-right"><span class="label label-success">9</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">2</a></td>
                                            <td>Lowi</td>
                                            <td class="text-right"><span class="label label-warning">6</span></td>

                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">3</a></td>
                                            <td>O2</td>
                                            <td class="text-right"><span class="label label-danger">4</span></td>

                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">4</a></td>
                                            <td>Digi</td>
                                            <td class="text-right"><span class="label label-info">3</span></td>

                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">5</a></td>
                                            <td>Movistar</td>
                                            <td class="text-right"><span class="label label-warning">2</span></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <!--
                    <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                    -->
                            <a href="javascript:void(0)" class="btn btn-sm btn-default pull-right">Ver todo</a>
                        </div>
                    </div>
                </div>

                <!-- /.card -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <p class="text-center">
                            <strong>Fibras: 01/{{ date('m') }}/{{ date('Y') }} a {{date('d') }}/{{ date('m') }}/{{ date('Y') }}</strong>
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
                            <h3 class="box-title"><i class="fas fa-mobile-alt"></i>&nbsp;Móviles: 68</h3>

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
                                <table class="table no-margin">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Operador</th>
                                            <th class="text-right">Móviles</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">1</a></td>
                                            <td>Másmóvil</td>
                                            <td class="text-right"><span class="label label-success">17</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">2</a></td>
                                            <td>Lowi</td>
                                            <td class="text-right"><span class="label label-warning">17</span></td>

                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">3</a></td>
                                            <td>LlamaYá</td>
                                            <td class="text-right"><span class="label label-danger">13</span></td>

                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">4</a></td>
                                            <td>O2</td>
                                            <td class="text-right"><span class="label label-info">11</span></td>

                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">5</a></td>
                                            <td>Digi</td>
                                            <td class="text-right"><span class="label label-warning">10</span></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <!--<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>-->
                            <a href="javascript:void(0)" class="btn btn-sm btn-default pull-right">Ver todo</a>
                        </div>


                        <!-- /.box-footer -->

                    </div>
                </div>

                <!-- /.card -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <p class="text-center">
                            <strong>Móviles: 01/{{ date('m') }}/{{ date('Y') }} a {{date('d') }}/{{ date('m') }}/{{ date('Y') }}</strong>
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
    <!-- SCRIPTS (revisar) -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="resources/js/Chart.js"></script>
    <script src="dist/js/pages/dashboard2.js"></script>
    <script src="dist/js/demo.js"></script>
@stop