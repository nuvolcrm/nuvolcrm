@extends('adminlte::page')

@section('title', 'Escritorio')

@section('content_header')
<h1>Escritorio</h1>
@stop

@section('content')


<body>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-4">
                <!-- /.card -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">


                        <!-- 5 OPERADORES POR INGRESOS -->

                        <div class="box-header with-border">
                            <h3 class="box-title">Ingresos</h3>
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
                                            <td class="text-right"><span class="label label-success">1050,13 €</span></td>
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
                            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver todo</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.box-footer -->


            <div class="col-4">
                <!-- /.card -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">

                        <!-- 5 OPERADORES POR FIBRAS -->

                        <div class="box-header with-border">
                            <h3 class="box-title">Fibras</h3>
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
                            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver todo</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-footer -->


            <div class="col-4">
                <!-- /.card -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                    <!-- 5 OPERADORES POR MOVILES -->

                        <div class="box-header with-border">
                            <h3 class="box-title">Móviles</h3>

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
                            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver todo</a>
                        </div>
                        <!-- /.box-footer -->

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
<script>
    console.log('Hi!');
</script>
@stop