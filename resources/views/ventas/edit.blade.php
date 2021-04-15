@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
<h1>Editar ventae</h1>
@stop

@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('ventas.update', $ventas->idVenta)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <label class="control-label">número de presupuesto</label>
                                <input type="numder" name="Numpresupuesto" placeholder="Numpresupuesto" class="form-control mb-2"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Cliente</label><br>
                                <input type="numder" name="Numpresupuesto" value="{{$ventas->idCliente}}" placeholder="Numpresupuesto" class="form-control mb-2"
                                    required>
                                <select class="js-example-basic-single" name="idCliente">
                                <!-- <select name="idCliente" class="form-control mb-2" id="sjs-example-diacritics"> -->
                                    {{-- @foreach ($ventas as $venta)
                                        <option value="{{ $venta->idCliente }}">{{ $venta->dni }}, {{ $venta->nombre }}
                                            {{ $venta->apellido1 }} {{ $venta->apellido2 }} 
                                                @if ($venta->alias)
                                                    ({{ $venta->alias }})
                                                @endif
                                            </option>
                                    @endforeach --}}
                                </select>
                        </div>
                            <div class="col-md-4">
                                <label class="control-label">Vendedor</label>
                                <input type="number" name="vendedor" placeholder="vendedor" value="{{$ventas->vendedor}}" class="form-control mb-2"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Tarifa</label>
                                <select name="idTarifa" class="form-control mb-2" id="sjs-example-diacritics">
                                    {{-- @foreach ($tarifas as $tarifa)
                                        <option value="{{ $tarifa->idTarifa }}">{{ $tarifa->nombreTarifa }} ({{ $tarifa->cuota }}€)</option>
                                    @endforeach --}}
                                </select>
                                {{-- <label class="control-label">Tarifa</label>
                                <input type="text" name="idTarifa" placeholder="idTarifa" class="form-control mb-2"
                                    required> --}}
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Colaborador</label>
                                <select name="idColaborador" class="form-control mb-2" >
                                    {{-- @foreach ($colaboradores as $colaborador)
                                        <option value="{{ $colaborador->idColaborador }}">{{ $colaborador->nombre }}</option>
                                    @endforeach --}}
                                </select>
                                {{-- <label class="control-label">idColaborador - DATE</label>
                                <input type="text" name="idColaborador" placeholder="idColaborador" class="form-control mb-2"
                                    required> --}}
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Linea</label>
                                <input type="text" name="linea" placeholder="linea" value="{{$ventas->linea}}" class="form-control mb-2"
                                    required>
                            </div>
                            <div class="col-md-4 d-flex flex-row">
                                <label class="control-label">prepago</label>
                                <input type="checkbox" name="prepago" class="form-control mb-2" value="{{$ventas->prepago}}" >
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">ALTA</label>
                                <input type="date" name="fecha_alta" placeholder="fecha_alta" class="form-control mb-2" value="{{$ventas->fecha_alta}}"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">ACTIVA</label>
                                <input type="date" name="fecha_activa" placeholder="fecha_activa" class="form-control mb-2" value="{{$ventas->fecha_activa}}"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">BAJA</label>
                                <input type="date" name="fecha_sale" placeholder="fecha_sale" class="form-control mb-2" value="{{$ventas->fecha_sale}}"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Tipo de alta</label>
                                <input type="text" name="tipoalta" placeholder="tipoalta" class="form-control mb-2" value="{{$ventas->tipoalta}}"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Libre</label>
                                <input type="text" name="libre" placeholder="libre" class="form-control mb-2" value="{{$ventas->libre}}"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Cobrado</label>
                                <input type="text" name="cobrado" placeholder="cobrado" class="form-control mb-2" value="{{$ventas->cobrado}}"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Pagado</label>
                                <input type="text" name="pagado" placeholder="pagado" class="form-control mb-2" value="{{$ventas->pagado}}"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Comision</label>
                                <input type="text" name="comision" placeholder="comision" class="form-control mb-2" value="{{$ventas->comision}}"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Extracomision</label>
                                <input type="text" name="extracomision" placeholder="extracomision" class="form-control mb-2" value="{{$ventas->extracomision}}"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label"></label>
                                {{-- <input type="text" name="observaciones" placeholder="observaciones" class="form-control mb-2"
                                    required> --}}
                                <textarea name="observaciones" maxlength="500" placeholder="Observaciones"> {{$ventas->observaciones}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label"></label>
                                {{-- <input type="text" name="incidencias" placeholder="incidencias" class="form-control mb-2"
                                    required> --}}
                                <textarea name="incidencias" maxlength="500" placeholder="Incidencias"> {{$ventas->incidencias}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Usuario</label>
                                <input type="text" name="usuario" placeholder="usuario" class="form-control mb-2" value="{{$ventas->usuario}}"
                                    required>
                            </div>
                            <div class="col-md-4">
                                
                            </div>
                            <div class="col-md-4">
                                
                            </div>
                            <div class="col-md-4">
                                <br><br>
                                <button class="btn btn-primary" type="submit">Añadir Presupuesto</button> &nbsp;
                                <a href="{{ route('ventas.index') }}">
                                    <button type="button" class="btn btn-danger">Cancelar</button>
                                </a>
                            </div>
                            {{-- <h1>Numpresupuesto - INT</h1>
                            <h1>idTaeifa - INT</h1>
                            <h1>idCliente - INT</h1>
                            <h1>estado - INT</h1>
                            <h1>fecha - DATE</h1>
                            <h1>poblacionPre - VARCHAR(60)</h1>
                            <h1>usuario - VARCHAR(100)</h1>
                            <h1>linea - INT</h1>
                            <h1>opactual - VARCHAR(50)</h1>
                            <h1>cuotaactual - VARCHAR(50)</h1>
                            <h1>finpermanencia - DATE</h1>
                            <h1>texto_fijo - VARCHAR(50)</h1>
                            <h1>textolibre - varchar(200)</h1> --}}
                        </div>
                    </form>
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

@stop