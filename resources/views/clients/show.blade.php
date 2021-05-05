@extends('adminlte::page')

@section('title', $client->nombre)

@section('content_header')

@section('css')

@endsection

@stop
@section('content')
<h1>Ficha de <span class="text-primary">
        @if ($client->alias != '')
            ("{{ $client->alias }}")
        @endif
        {{ $client->nombre }} {{ $client->apellido1 }} {{ $client->apellido2 }}
    </span></h1>
<!-- <a href="{{ route('clients.index') }}">Volver a clientes</a>
    <br> -->
<a class="btn btn-sm btn-success pull-left" href="{{ route('clients.index') }}">Volver al listado</a>
<a class="btn btn-sm btn-warning pull-left" href="{{ route('clients.edit', $client) }}">Editar este cliente</a>

<h4>Aquí pondremos todos los campos de la ficha del Cliente. Desde los botones de arriba, podremos volver al listado o
    editarlo. esta vista nos servirá para enlazarla desde presupuesto o ventas para ver a ficha. Contenido por definir.
</h4>
@stop

@section('js')

@stop
