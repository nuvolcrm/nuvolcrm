<?php
use App\Models\fibra;
use App\Models\moviles;
use App\Models\fibras_moviles;
use App\Models\resenas;
use Illuminate\Support\Facades\DB;

    $fibras = fibra::all();
    $moviles = moviles::all();
    $fibras_moviles = fibras_moviles::all();
	$reseñas = resenas::all();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MOVY</title>
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="frontendp/img/favicons/favicon.png">
	<link rel="apple-touch-icon" sizes="60x60" href="frontendp/img/favicons/favicon.png">
	<link rel="icon" type="image/png" href="frontendp/img/favicons/favicon.png" sizes="32x32">
	<link rel="icon" type="image/png" href="frontendp/img/favicons/favicon.png" sizes="16x16">
	<link rel="manifest" href="frontendp/img/favicons/favicon.png">
	<link rel="shortcut icon" href="frontendp/img/favicons/favicon.png">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="frontendp/img/favicons/favicon.png">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="frontendp/css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="frontendp/css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="frontendp/css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="frontendp/css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="frontendp/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="frontendp/fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="frontendp/css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="frontendp/img/loader.gif" alt="Preloader image">
	</div>
	<nav class="main-header navbar
    navbar-expand
    navbar-dark navbar-light">
		<div class="container">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
                    <li><a class="navbar-brand" href="#"><img src="frontendp/img/favicon.png" data-active-url="frontendp/img/favicon.png" style="width:50px !important; height:50px !important" alt=""></a></li>
					<li><a href="#operadores">OPERADORES</a></li>
					<li><a href="#fibra+movil">OFERTAS FIBRA+MOVIL</a></li>
					<li><a href="#movil">OFERTAS MOVIL</a></li>
					<li><a href="#fibra">OFERTAS FIBRA</a></li>
					<li><a href="#reseñas">RESEÑAS</a></li>
					<li><a href="#contacto">CONTACTO</a></li>
					<li>{{-- <a href="{{('login')}}" datsoua-toggle="modal" data-target="#modal1" class="btn btn-blue">Sign Up </a>--}}
                        @if (Route::has('login'))
                            <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('home') }}" class="btn btn-blue">Home</a>
                                    <span class="open-blink"></span>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-blue">Log in</a>
                                @endauth
                            </div>
                        @endif
                    </li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12">
							<h3 class="white typed">TENEMOS LAS MEJORES TARIFAS</h3>
							<span class="typed-cursor">|</span>
							<h4 class="light white">
                                Dinos lo que necesitas y te buscaremos la mejor solución al mejor precio. Te asesoramos con total confianza para que no te lleves sorpresas. Cientos de Clientes satisfechos en 4 años son nuestro mejor aval.
							</h4>
						</div>
					</div>
                    <form action="mailto:?Subject=Contacto MOVY.es" method="POST">
                        <div>
                            <div class="col-md-12" >
                                <div class="col-md-4">
                                    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="tel" name="telefono" placeholder="Teléfono" class="form-control mb-2" maxlength="9" pattern="[6-7-9]{1}[0-9]{8}">
                                </div>
                                <div class="col-md-4">
                                    <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
                                </div>
                                <div class="col-md-4" >
                                    <button class="btn btn-primary btn-block" type="submit">CONTACTAR</button>
                                </div>
                            </div>
                        </div>
                    </form>
					
                </div>
			</div>
		</div>
	</header>
	<section id="operadores" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h3>OPERADORES</h3>
				<ul class="">
                    <li class="btn btn-primary" href="#particulares" onclick="mostrarParticulares()"><a>Particulares</a></li>
                    <li class="btn btn-primary" href="#autonomos_negocios" onclick="ocultarParticulares()"><a>Autonomos y Negocios</a></li>
                </ul>
			</div>
            <div class="col-md-8 col-md-offset-2">
                <div id="particulares" class="item text-center">
                    <img src="frontendp/img/particulares/movistar.png" class="img-circle" alt="movistar" width="25%">
                    <img src="frontendp/img/particulares/o2.png" class="img-circle" alt="o2" width="25%">
                    <img src="frontendp/img/particulares/tuenti.png" class="img-circle" alt="tuenti" width="25%">
                    <img src="frontendp/img/particulares/masmovil.png" class="img-circle" alt="masmovil" width="25%">
                    <img src="frontendp/img/particulares/pepephone.png" class="img-circle" alt="pepephone" width="25%">
                    <img src="frontendp/img/particulares/llamaya.png" class="img-circle" alt="llamaya" width="25%">
                    <img src="frontendp/img/particulares/lowi.png" class="img-circle" alt="lowi" width="25%">
                    <img src="frontendp/img/particulares/fi.png" class="img-circle" alt="fi" width="25%">
                    <img src="frontendp/img/particulares/digi.png" class="img-circle" alt="digi" width="25%">
                    <img src="frontendp/img/particulares/amena.png" class="img-circle" alt="amena" width="25%">
                    <img src="frontendp/img/particulares/simyo.png" class="img-circle" alt="simyo" width="25%">
                    <img src="frontendp/img/particulares/p.png" class="img-circle" alt="p" width="25%">
                </div>
                <div id="autonomos_negocios" class="item text-center">
                    <img src="frontendp/img/autonomos_negocios/masmovil.png" class="img-circle" alt="masmovil" width="25%">
                    <img src="frontendp/img/autonomos_negocios/movistar.png" class="img-circle" alt="movistar" width="25%">
                    <img src="frontendp/img/autonomos_negocios/orange.png" class="img-circle" alt="orange" width="25%">
                    <img src="frontendp/img/autonomos_negocios/vodafone.png" class="img-circle" alt="vodafone" width="25%">
                    <img src="frontendp/img/autonomos_negocios/yoigo.png" class="img-circle" alt="yoigo" width="25%">
                </div>
            </div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<script>
		window.onload = mostrarParticulares;
	function ocultarParticulares(){
		var particulares = document.getElementById("particulares");
		var autonomos_negocios = document.getElementById("autonomos_negocios");
		if (particulares.style.display = "none") {
			autonomos_negocios.style.display = "block";
			particulares.style.display = "none";
    	} else {
			particulares.style.display === "none";
    	}
	}
	function mostrarParticulares(){
		var particulares = document.getElementById("particulares");
		var autonomos_negocios = document.getElementById("autonomos_negocios");
		if (autonomos_negocios.style.display = "none") {
			particulares.style.display = "block";
			autonomos_negocios.style.display = "none";
    	} else {
			autonomos_negocios.style.display === "none";
    	}
	}
	</script>
	<section id="fibra+movil" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h3 class="margin-top">OFERTAS FIBRA+MOVIL</h3>
			</div>
			<div class="row">
				@foreach ($fibras_moviles as $fib_mov)
					<div class="col-md-4">
						<div class="team text-center">
							<div class="" style="background-color: rgba(0, 168, 255, 0.9)">
								<div class=" text-center">
									<h2 class="white">€{{$fib_mov->precio}}/MES</h2>
								</div>
							</div>
							<h4 class="title">{{$fib_mov->titulo}}</h4>
							<div class="light">
								<h5 class="muted regular">{{$fib_mov->descripcion1}}</h5>
								<h5 class="muted regular">{{$fib_mov->descripcion2}}</h5>
								<h5 class="muted regular">{{$fib_mov->descripcion3}}</h5>
								<h5 class="muted regular">{{$fib_mov->descripcion4}}</h5>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
    <section id="movil" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h3 class="margin-top">OFERTAS MOVIL</h3>
			</div>
			<div class="row">
				@foreach ($moviles as $movil)
					<div class="col-md-4">
						<div class="team text-center">
							<div class="" style="background-color: rgba(0, 168, 255, 0.9)">
								<div class=" text-center">
									<h2 class="white">€{{$movil->precio}}/MES</h2>
								</div>
							</div>
							<h4 class="title">{{$movil->titulo}}</h4>
							<div class="light">
								<h5 class="muted regular">{{$movil->descripcion1}}</h5>
								<h5 class="muted regular">{{$movil->descripcion2}}</h5>
								<h5 class="muted regular">{{$movil->descripcion3}}</h5>
								<h5 class="muted regular">{{$movil->descripcion4}}</h5>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
    <section id="fibra" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h3 class="margin-top">OFERTAS FIBRA</h3>
			</div>
			<div class="row">
				@foreach ($fibras as $fibra)
					<div class="col-md-4">
						<div class="team text-center">
							<div class="" style="background-color: rgba(0, 168, 255, 0.9)">
								<div class=" text-center">
									<h2 class="white">€{{$fibra->precio}}/MES</h2>
								</div>
							</div>
							<h4 class="title">{{$fibra->titulo}}</h4>
							<div class="light">
								<h5 class="muted regular">{{$fibra->descripcion1}}</h5>
								<h5 class="muted regular">{{$fibra->descripcion2}}</h5>
								<h5 class="muted regular">{{$fibra->descripcion3}}</h5>
								<h5 class="muted regular">{{$fibra->descripcion4}}</h5>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	<section id="reseñas" class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						@foreach ($reseñas as $reseña)
						<div class="item text-center">
							<h3 class="white light">Reseñas</h3><br>
							<img class="img-circle" width="10%" src="img/resenas/{{$reseña->foto}}">
							<h4 class="white light">{{$reseña->descripcion}}</h4>
							<i class="light-white light">{{$reseña->nombre}}</i>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
    <section id="contacto" class="s123-module s123-module-contact layout-3" data-module-id="5f8b6dc6cb541" data-module-type-num="7"> <div data-aos="fade-up" class="container-fluid page_header_style page_header_style_ aos-init aos-animate">
        <div class="row">
            <div class="container">
                <div class="row modulesTitle">
                    <div class="col-xs-12 text-center">
                        <h3 id="section-5f8b6dc6cb541-title" class="s123-page-header">CONTACTO</h3>
                        <hr class="small">
                        <h4 id="section-5f8b6dc6cb541-slogan" class="s123-page-slogan"></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row"> <div class="col-md-6">
                <div class="row text-center">
                    <div class="col-md-5 preview-highlighter" style="text-align: center;">
                        <ul class="list-unstyled contact-as-details-container">
                            <li>Calle Maestro Serrano, 17, Paiporta, España</li>
                        </ul> 
                        <ul class="list-unstyled contact-as-details-container">
                            <li>
                                <a class="social-icons-container" href="https://wa.me/34644744866" target="_blank">
                                    <img src="https://cdn-cms-s.f-static.net/files/icons/socialNetworksBrands/whatsApp-icon.png?v=r7241" width="15%">
                                    <span dir="ltr">+34-644 744 866</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:hola@movy.es">
                                    <i class="svg-m s123-icon-converter  fa-fw" data-icon-name="envelope-o" 
                                    style=" mask: url('https://static.s123-cdn-static.com/ready_uploads/svg/envelope-o.svg?v=2'); -webkit-mask: url('https://static.s123-cdn-static.com/ready_uploads/svg/envelope-o.svg?v=2');" 
                                    data-ie11-classes=" fa-fw">&nbsp;
                                    </i>
                                    hola@movy.es
                                </a>
                            </li>
                            <li class="open_hours_field">
                                <i class="svg-m s123-icon-converter fa-fw" data-icon-name="clock-o" 
                                style=" mask: url('https://static.s123-cdn-static.com/ready_uploads/svg/clock-o.svg?v=2'); -webkit-mask: url('https://static.s123-cdn-static.com/ready_uploads/svg/clock-o.svg?v=2');" 
                                data-ie11-classes="fa-fw">&nbsp;</i>Lunes a viernes 09:00-13:00 Martes y jueves 17:00-20:00
                            </li> 
                        </ul> 
                    </div> 
                    <form action="mailto:" method="POST">
                        <div class="col-md-6 col-md-offset-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <input type="text" name="nombre" placeholder="Nombre" class="form-control" required="" data-msg-required="Este campo es necesario">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="telefono" placeholder="Teléfono" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Dirección de correo electrónico" class="form-control s123-force-ltr" required="" data-msg-required="Este campo es necesario" data-rule-email="true" data-msg-email="Introduzca una dirección de correo electrónico válida.">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="contact_message" placeholder="Mensaje" style="min-height: 100px;"></textarea>
                            </div>
                            <button type="submit" class="button btn-block">Contacto</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="s123-module-contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3081.9549579275777!2d-0.41948268467471067!3d39.42514297949275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604e5ddf462bdf%3A0x956f72b0efcd9011!2sMOVY.ES%20Distribuidor%20Autorizado%20M%C3%81SM%C3%93VIL!5e0!3m2!1ses!2ses!4v1620123245735!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div> 
            </div> 
        </div>
    </section>
	<footer style="text-align: center">
		<div class="container">
            <div>
				<div class="col-sm-4 text-ceter text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/MOVYES"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.instagram.com/movyonline/?hl=es"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://maps.app.goo.gl/54wju1YQTTTL6gA99" target="_blank"><i class="fa fa-google-plus" style="url('https://static.s123-cdn-static.com/ready_uploads/svg/share.svg?v=2'); -webkit: url('https://static.s123-cdn-static.com/ready_uploads/svg/share.svg?v=2');">&nbsp;</i></a></li>
					</ul>
				</div>
			</div>
        </div>
        <div class="container">
            <ul class="nav navbar-nav navbar-right main-nav">
                <li><a href="#operadores">OPERADORES</a></li>
                <li><a href="#fibra+movil">OFERTAS FIBRA+MOVIL</a></li>
                <li><a href="#movil">OFERTAS MOVIL</a></li>
                <li><a href="#fibra">OFERTAS FIBRA</a></li>
                <li><a href="#reseñas">RESEÑAS</a></li>
                <li><a href="#contacto">CONTACTO</a></li>
            </ul>
        </div>
        <div class="container">
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy;
                        Copyright © 2021 Todos los derechos reservados - MOVY.ES</p>
				</div>
            </div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="frontendp/js/jquery-1.11.1.min.js"></script>
	<script src="frontendp/js/owl.carousel.min.js"></script>
	<script src="frontendp/js/bootstrap.min.js"></script>
	<script src="frontendp/js/wow.min.js"></script>
	<script src="frontendp/js/typewriter.js"></script>
	<script src="frontendp/js/jquery.onepagenav.js"></script>
	<script src="frontendp/js/main.js"></script>
	<?php
					if(isset($_POST['submit']))
    {
        //
        $nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contact_message = $_POST['contact_message'];

$header = 'Form ' . $email . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . "\r\n";
$mensaje .= "Mensaje: " . $_POST['contact_message'] . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y',time());

$para = 'vmarch995@gmail.com';
$asunto = 'Asunto del email recibido';

mail($para, $asunto, utf8_decode($mensaje), $header);

return view('/');
    }
					?>
</body>

</html>
