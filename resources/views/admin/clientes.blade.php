@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<div class="col-sm-4">
    <h1>Clientes</h1>
    
    <a href="clientes_nuevo.php" class="btn btn-success">Nuevo Cliente</a>
</div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
