@extends('adminlte::page')

@section('title', 'Nuevo Cliente')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>Nueva Venta</h1>
            </div>
        </div>
    </div>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@stop
@section('content')
<!-- Main content -->
<section class="content">
    <!-- /.card -->
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        @method('PUT')
        <h1>Nueva Venta</h1>
    </form>
</section>
@stop

@section('js')

@stop
