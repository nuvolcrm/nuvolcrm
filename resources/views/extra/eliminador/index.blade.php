
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
    <body>
        <div class="row">
            <div class="col-2">
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
</section>
@stop

@section('js')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
<script src="/js/datatable.js"></script>
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
