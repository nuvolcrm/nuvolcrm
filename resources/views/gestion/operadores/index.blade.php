<?php
$operadores = DB::table('operadores')->get();
?>
@extends('adminlte::page')

@section('title', 'Operadores')

@section('content_header')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <h1>
                Operadores
                <a href="{{ route('gestion.operadores.create') }}" class="rounded-circle btn btn-primary">
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
    <body>
        <div class="row">
            <div class="col">
                <!-- /.card -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-hover table-responsive-xl table-md text-sm">
                            <thead class="table-primary">
                                <tr>
                                    <th>Id</th>
                                    <th>Logo</th>
                                    <th>Nombre</th>
                                    <th>Web Cliente</th>
                                    <th>Web Distribuidor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($operadores as $operador)
                                    <tr>
                                        <td>{{ $operador -> idOperador}}</td>
                                        <td><img src="../img/{{ $operador->logo }}" height="40"></td>
                                        <td>{{ $operador -> nombreOperador}}</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</section>
@stop

@section('js')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
<script src="/js/datatable.js"></script>

@stop
