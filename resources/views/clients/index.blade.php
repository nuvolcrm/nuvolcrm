@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>
                    Clientes
                    <a href="{{ route('clients.create') }}" class="rounded-circle btn btn-primary">
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
                                <th>Id</th>
                                <th class="text-nowrap">Nombre y apellidos</th>
                                <!-- <th>Alias</th> -->
                                <th>Documento</th>
                                <th><i class="fas fa-language"></i></th>
                                <!-- <th><i class='fas fa-phone-square-alt'></i></th> -->
                                <!-- <i class='fas fa-phone-square-alt'></i>&nbsp;<i class='fab fa-whatsapp'></i> -->
                                <th class="text-nowrap">Teléfono</th>
                                <!-- <th><i class="fab fa-whatsapp"></i></th> -->
                                <th>Dirección</th>
                                <th>Población</th>
                                <th>Nacimiento</th>
                                <th>Segm.</th>
                                <th><i class='far fa-envelope'></i></th>
                                <th>Email</th>
                                <th><i class='far fa-newspaper'></i></th>
                                <th>Valor</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>
                                        @if ($client->alias != '')
                                            ("{{ $client->alias }}")
                                        @endif
                                        {{ $client->nombre . ' ' . $client->apellido1 . ' ' . $client->apellido2 }}
                                    </td>
                                    <!-- <td>{{ $client->alias }}</td> -->
                                    <td>{{ $client->dni }}</td>
                                    <td>
                                        @if (($client->idioma === 'Valenciano') or ($client->idioma === 'valenciano') or ($client->idioma === 'val'))
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/d/df/Flag_of_the_Land_of_Valencia_%28official%29.svg"
                                                alt="Valenciano" width="20" height="15">
                                        @elseif (($client->idioma === 'Español') or ($client->idioma === 'espanyol') or ($client->idioma === 'esp'))
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Bandera_de_Espa%C3%B1a_%28nuevo_dise%C3%B1o%29.svg"
                                                alt="Español" width="20" height="15">
                                        @elseif (($client->idioma === 'Ingles') or ($client->idioma === 'eng'))
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Flag_of_the_United_Kingdom.svg"
                                                alt="Ingles" width="20" height="15">
                                        @else
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b0/No_flag.svg"
                                                alt="NO" width="20" height="15">
                                        @endif
                                    </td>
                                    <td class="text-nowrap">
                                        <a class='fas fa-phone-square-alt' href="tel:{{ $client->telefono }}"></a>
                                        <a class='fab fa-whatsapp text-success'
                                            href="https://api.whatsapp.com/send?phone=34{{ $client->telefono }}"></a>
                                        {{ $client->telefono }}
                                    </td>
                                    <td>{{ $client->direccion }}</td>
                                    <td>{{ $client->poblacion }}</td>
                                    <td>{{ $client->fecha_nacimiento }}
                                        @if ($client->fecha_nacimiento === date('Y-m-d'))
                                            <!-- esta condición no es correcta. Habría que cortar del string el mes/día y compararlos con el mes/dia actual date('m-d')-->
                                            <i class="fas fa-birthday-cake text-primary"></i>
                                        @endif
                                    </td>
                                    <td>{{ $client->segmento }}</td>
                                    <td><a class="far fa-envelope" href=" mailto:{{ $client->email }}"></a></td>
                                    <td>{{ $client->email }}</td>
                                    <td>
                                        @if ($client->mailing === 'on')
                                            <i class="fas fa-check text-primary"></i>
                                        @endif
                                    </td>
                                    <td class="bg-info text-right"></td>
                                    <td><a href="{{ route('clients.show', $client->id) }}"><i
                                                class='fas fa-pencil-alt'></i></a></td>
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
<script>
  $('#example2').DataTable({
    responsive: true,
    autoWidth: false,
    "order": [[ 0, "desc" ]],
    "language": {
      "lengthMenu": "Ver " +
        `<select class = "custom-select custom-select-sm form-control form-control-sm">
                            <option value = '5'>5</option>
                            <option value = '10'>10</option>
                            <option value = '25'>25</option>
                            <option value = '50'>50</option>
                            <option value = '-1'>All</option>
                          </select>` +
        " registros",
      "zeroRecords": "Ninguna coincidencia",
      "info": "Página _PAGE_ de _PAGES_",
      "infoEmpty": "Sin registros disponibles",
      "infoFiltered": "(filtrado de _MAX_ registros totales)",
      'search': 'Buscar',
      'paginate': {
        'next': 'Siguiente',
        'previous': 'Anterior'
      }
    }
  });
</script>
@stop
