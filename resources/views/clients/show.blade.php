@extends('adminlte::page')

@section('title', 'Clientes ' . $client->nombre)

@section('content_header')

@section('css')

@endsection

@stop
@section('content')
    <h1>show {{$client->nombre}}</h1>
    <a href="{{route('clients.index')}}">Volver a clientes</a>
    <br>
    <a href="{{route('clients.edit', $client)}}">Editar clientes</a>
@stop

@section('js')

@stop