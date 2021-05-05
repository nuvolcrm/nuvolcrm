@extends('adminlte::page')

@section('title', 'presupuesto ' . $presupuesto->idPresupuesto)

@section('content_header')

@section('css')

@endsection

@stop
@section('content')
<h1>Presupuestos de <span class="text-primary">
    @if ($presupuesto->alias != '')
        ("{{ $presupuesto->alias }}")
    @endif
    {{ $presupuesto->nombre }} {{ $presupuesto->apellido1 }} {{ $presupuesto->apellido2 }}
</span></h1>
<!-- <a href="{{ route('clients.index') }}">Volver a clientes</a>
<br> -->
<a class="btn btn-sm btn-success pull-left" href="{{ route('presupuestos.index') }}">Volver al listado</a>
<a class="btn btn-sm btn-warning pull-left" href="{{ route('presupuestos.edit', $presupuesto) }}">Editar este cliente</a>

@stop

@section('js')

@stop
