
@extends('adminlte::page')

@section('title', 'Eliminador')

@section('content_header')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <h1>
                Eliminador de Espacios
                {{-- <a href="{{ route('gestion.enlaces.create') }}" class="rounded-circle btn btn-primary">
                    <i class="fas fa-plus"></i>
                </a> --}}
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
        <div class="col-md-4">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fab fa-whatsapp text-primary"></i> WhatsApp</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="input-group input-group-sm">
                              <input class="form-control form-control-navbar" type="tel" pattern="[6-7]{1}[0-9]{8}" placeholder="Escribe el teléfono y pulsa intro" aria-label="Search" name="tel" id="tel" onkeydown="presionar_tecla()">
                              <div class="input-group-append">
                                <span class="input-group-text" onclick="whats()">
                                  <i class="fab fa-whatsapp"></i>
                                </span>
                              </div>
                    </div>
                </div>
            </div>
            </div>

        </div>

        <div class="col-md-8">
            <!-- /.card -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fas fa-text-width text-primary"></i> Elimina espacios y guiones:</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <input class="w-100" type="text" name="cadena" id="cadena" onblur="eliminarespacios()" placeholder="Escribe el texto y haz click fuera">
                        <br>
                        <div id="cadena2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section class="content">
    <body>
        <div class="row">
            <div class="col">
                <!-- /.card -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                            <div class="input-group input-group-sm">
                              <input class="form-control form-control-navbar" type="tel" pattern="[6-7]{1}[0-9]{8}" placeholder="WhatsApp..." aria-label="Search" name="tel" id="tel" onkeydown="presionar_tecla()">
                              <div class="input-group-append">
                                <span class="input-group-text" onclick="whats()">
                                  <i class="fab fa-whatsapp"></i>
                                </span>
                              </div>
                            </div><br>
                        <input type="text" name="cadena" id="cadena" onblur="eliminarespacios()" placeholder="Eliminador de Espacios-Guiones"> Escribe el texto y haz click fuera para obtenerlo sin espacios.
                        <br>
                        <div id="cadena2"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</section>--}}
@stop

@section('js')

<script>
    function whats(){
      var tel = document.getElementById("tel").value;
      window.open('https://wa.me/34' + tel); 
    }
    function eliminarespacios(){ 
      var cadena = document.getElementById("cadena").value;
      document.getElementById("cadena2").innerHTML = cadena.replace(/-|\s/g,"");
    }
    function presionar_tecla(){
        tecla_enter = event.keyCode;

        if(tecla_enter == 13){
            var tel = document.getElementById("tel").value;
            window.open('https://wa.me/34' + tel); 
        }
    }
</script>

@stop
