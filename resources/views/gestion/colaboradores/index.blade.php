@extends('adminlte::page')

@section('title', 'Colaboradores')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>
                    Colaboradores
                    <a href="{{ route('gestion.colaboradores.create') }}" class="rounded-circle btn btn-primary">
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
    <div class="row">
        <div class="col-12">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-hover table-responsive-xl table-md text-sm">
                        <thead class="table-primary">
                            <tr>
                                <th>DNI</th>
                                <th>NOMBRE</th>
                                <th>DIRECCIÓN</th>
                                <th>TELÉFONO</th>
                                {{-- <th><i class='far fa-envelope'></i></th> --}}
                                <th>E-mail</th>
                                <th>CUENTA</th>
                                <th>TIPO</th>
                                <th>ACTIVO</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($colaboradores as $colaborador)
                                <tr>
                                    <td>{{ $colaborador->dni }}</td>
                                    <td>
                                        @if ($colaborador->alias)
                                            ("{{ $colaborador->alias }}")
                                        @endif
                                        {{ $colaborador->nombre . ' ' . $colaborador->apellido1 . ' ' . $colaborador->apellido2 }}
                                    </td>
                                    <td>
                                        {{ $colaborador->direccion }}</td>
                                    <td>
                                        <a class='fas fa-phone-square-alt'
                                            href="tel:{{ $colaborador->telefono }}"></a>
                                        <a class='fab fa-whatsapp text-success'
                                            href="https://api.whatsapp.com/send?phone=34{{ $colaborador->telefono }}"></a>
                                        {{ $colaborador->telefono }}
                                    </td>
                                    <td>
                                        <a class="far fa-envelope" href=" mailto:{{ $colaborador->email }}"></a>
                                        {{ $colaborador->email }}
                                    </td>
                                    <td>{{ $colaborador->cuenta }}</td>
                                    <td>
                                        {{-- {{ $colaborador->tipo }}% --}}
                                        @if ($colaborador->tipo < 30)
                                            <span class="badge bg-red">{{ $colaborador->tipo }}%</span>
                                        @elseif (($colaborador->tipo >= 30) && ($colaborador->tipo < 50)) 
                                            <span class="badge bg-yellow">{{ $colaborador->tipo }}%</span>
                                        @elseif (($colaborador->tipo >= 50) && ($colaborador->tipo < 70)) 
                                            <span class="badge bg-green">{{ $colaborador->tipo }}%</span>
                                        @elseif (($colaborador->tipo >= 70) && ($colaborador->tipo < 90))
                                            <span class="badge bg-blue">{{ $colaborador->tipo }}%</span>
                                        @else
                                            <span class="">??%</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($colaborador->activo == 'on')
                                            {{-- <i class='fa fa-fw fa-check text-success'></i>
                                        <i class="bi bi-check-circle-fill text-success"></i> --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-check-square-fill text-success"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                                            </svg>
                                        @elseif ($colaborador->activo == 'off')
                                            {{-- ❌
                                        <i class="fa fa-fw fa-close text-danger"></i> --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-x-square-fill text-danger"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z" />
                                            </svg>
                                            <i class="bi bi-x-circle-fill text-danger"></i>
                                        @endif
                                        {{ $colaborador->activo }}
                                    </td>
                                    <td>
                                        <a
                                            href="{{ route('gestion.colaboradores.edit', $colaborador->idColaborador) }}">
                                            <i class='fas fa-pencil-alt'></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('js')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
<script src="/js/datatable.js"></script>
@stop
