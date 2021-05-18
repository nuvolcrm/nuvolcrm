@extends('adminlte::page')

@section('title', 'FrontEnd ' . $client->nombre)

@section('content_header')

@section('css')

@endsection

@stop
@section('content')
    <h1>show {{$client->nombre}}</h1>
    <a href="{{route('frontend.index')}}">Volver a clientes</a>
    <br>
    <a href="{{route('frontend.edit', $client)}}">Editar clientes</a>
@stop

@section('js')

@stop