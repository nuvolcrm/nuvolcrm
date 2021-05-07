<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MOVY</title>
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="frontend/img/favicons/favicon.png">
	<link rel="apple-touch-icon" sizes="60x60" href="frontend/img/favicons/favicon.png">
	<link rel="icon" type="image/png" href="frontend/img/favicons/favicon.png" sizes="32x32">
	<link rel="icon" type="image/png" href="frontend/img/favicons/favicon.png" sizes="16x16">
	<link rel="manifest" href="frontend/img/favicons/favicon.png">
	<link rel="shortcut icon" href="frontend/img/favicons/favicon.png">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="frontend/img/favicons/favicon.png">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="frontend/css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="frontend/css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="frontend/css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="frontend/css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="frontend/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="frontend/fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="frontend/css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="frontend/img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
				</button>
				<a class="navbar-brand" href="#"><img src="frontend/img/favicon.png" data-active-url="frontend/img/favicon.png" style="width:50px !important; height:50px !important" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
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
							<h1 class="white typed">TENEMOS LAS MEJORES TARIFAS</h1>
							<span class="typed-cursor">|</span>
							<h3 class="light white">
                                Dinos lo que necesitas y te buscaremos la mejor solución al mejor precio. Te asesoramos con total confianza para que no te lleves sorpresas. Cientos de Clientes satisfechos en 4 años son nuestro mejor aval.</h3>
						</div>
					</div>
                    <form action="" method="POST">
                        <div>
                            <div class="col-md-4">
                                <div>
                                    <input type="text" name="Nombre" placeholder="Nombre" class="form-control mb-2" required>
                                </div>
                                <div>
                                    <input type="tel" name="telefono" placeholder="Teléfono" class="form-control mb-2" maxlength="9" pattern="[6-7-9]{1}[0-9]{8}" required>
                                </div>
                                <div>
                                    <input type="text" name="email" placeholder="Email" class="form-control mb-2" required>
                                </div>
                                <div>
                                    <button class="btn btn-primary" type="submit">CONTACTAR</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</header>
{{-- 	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">Today's Schedule</h5>
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Early Exercise</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Muscle Building</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Cardio</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Early Exercise</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Muscle Building</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Cardio</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Early Exercise</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Muscle Building</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Cardio</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Premium Membership</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">Register Today</h4>
							<h4 class="white heading small-pt">20% Discount</h4>
							<a href="#" class="btn btn-white-fill expand">Register</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						<h5 class="white heading">Happy Clients</h5>
						<div class="owl-testimonials bottom">
							<div class="item">
								<h4 class="white heading content">I couldn't be more happy with the results!</h4>
								<h5 class="white heading light author">Adam Jordan</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">I can't believe how much better I feel!</h4>
								<h5 class="white heading light author">Greg Pardon</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">Incredible transformation and I feel so healthy!</h4>
								<h5 class="white heading light author">Christina Goldman</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<section id="operadores" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>OPERADORES</h2>
				<ul>
                    <li><a href="#particulares">Particulares</a></li>
                    <li><a href="#autonomos_negocios">Autonomos y Negocios</a></li>
                </ul>
			</div>
            <div class="col-md-8 col-md-offset-2">
                <div id="particulares" class="item text-center">
                    <img src="frontend/img/particulares/movistar.png" class="img-circle" alt="movistar" width="25%">
                    <img src="frontend/img/particulares/o2.png" class="img-circle" alt="o2" width="25%">
                    <img src="frontend/img/particulares/tuenti.png" class="img-circle" alt="tuenti" width="25%">
                    <img src="frontend/img/particulares/masmovil.png" class="img-circle" alt="masmovil" width="25%">
                    <img src="frontend/img/particulares/pepephone.png" class="img-circle" alt="pepephone" width="25%">
                    <img src="frontend/img/particulares/llamaya.png" class="img-circle" alt="llamaya" width="25%">
                    <img src="frontend/img/particulares/lowi.png" class="img-circle" alt="lowi" width="25%">
                    <img src="frontend/img/particulares/fi.png" class="img-circle" alt="fi" width="25%">
                    <img src="frontend/img/particulares/digi.png" class="img-circle" alt="digi" width="25%">
                    <img src="frontend/img/particulares/amena.png" class="img-circle" alt="amena" width="25%">
                    <img src="frontend/img/particulares/simyo.png" class="img-circle" alt="simyo" width="25%">
                    <img src="frontend/img/particulares/p.png" class="img-circle" alt="p" width="25%">
                </div>
                <div id="autonomos_negocios" class="item text-center">
                    <img src="frontend/img/autonomos_negocios/masmovil.png" class="img-circle" alt="masmovil" width="25%">
                    <img src="frontend/img/autonomos_negocios/movistar.png" class="img-circle" alt="movistar" width="25%">
                    <img src="frontend/img/autonomos_negocios/orange.png" class="img-circle" alt="orange" width="25%">
                    <img src="frontend/img/autonomos_negocios/vodafone.png" class="img-circle" alt="vodafone" width="25%">
                    <img src="frontend/img/autonomos_negocios/yoigo.png" class="img-circle" alt="yoigo" width="25%">
                </div>
            </div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="fibra+movil" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">OFERTAS FIBRA+MOVIL</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h1 class="white">€34.95/MES</h1>
							</div>
						</div>
						<h3 class="title">FIBRA 100 + MOVIL 15GB</h3>
						<div class="light">
							<h4 class="muted regular">Fibra 100Mb</h4>
                            <h4 class="muted regular">Móvil 15GB acumulables y llamadas ilimitadas</h4>
                            <h4 class="muted regular">Alta, instalación y router WiFi GRATIS*</h4>
						</div>
					</div>
				</div>
                <div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h1 class="white">€48.90/MES</h1>
							</div>
						</div>
						<h3 class="title">FIBRA 600MB + MOVIL 31GB</h3>
						<div class="light">
							<h4 class="muted regular">Fibra 600Mb</h4>
                            <h4 class="muted regular">Móvil 131GB acumulables y llamadas ilimitadas</h4>
                            <h4 class="muted regular">Alta, instalación y router WiFi GRATIS*</h4>
						</div>
					</div>
				</div>
                <div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h1 class="white">€39.95/MES</h1>
							</div>
						</div>
						<h3 class="title">FIBRA 300MB + MOVIL 20GB</h3>
						<div class="light">
							<h4 class="muted regular">Fibra 300Mb</h4>
                            <h4 class="muted regular">Móvil 20GB acumulables y llamadas ilimitadas</h4>
                            <h4 class="muted regular">Alta, instalación y router WiFi GRATIS*</h4>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
    <section id="movil" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">OFERTAS MOVIL</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h1 class="white">€8.90/MES</h1>
							</div>
						</div>
						<h3 class="title">8GB</h3>
						<div class="light">
							<h4 class="muted regular">Fibra 100Mb</h4>
                            <h4 class="muted regular">Llamadas ilimitadas</h4>
                            <h4 class="muted regular">Sin Permanencia</h4>
						</div>
					</div>
				</div>
                <div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h1 class="white">€7.95/MES</h1>
							</div>
						</div>
						<h3 class="title">8GB</h3>
						<div class="light">
							<h4 class="muted regular">10GB acumulables</h4>
                            <h4 class="muted regular">Llamadas ilimitadas</h4>
                            <h4 class="muted regular">Cobertura Vodafone</h4>
                            <h4 class="muted regular">Sin permanencia</h4>
						</div>
					</div>
				</div>
                <div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h1 class="white">€11.95/MES</h1>
							</div>
						</div>
						<h3 class="title">15GB</h3>
						<div class="light">
							<h4 class="muted regular">20GB acumulables</h4>
                            <h4 class="muted regular">Llamadas ilimitadas</h4>
                            <h4 class="muted regular">Cobertura Vodafone</h4>
                            <h4 class="muted regular">Sin permanencia</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h1 class="white">€19.90/MES</h1>
							</div>
						</div>
						<h3 class="title">31GB</h3>
						<div class="light">
							<h4 class="muted regular">31GB acumulables</h4>
                            <h4 class="muted regular">Llamadas ilimitadas</h4>
                            <h4 class="muted regular">Sin permanencia</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section id="fibra" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">OFERTAS FIBRA</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h1 class="white">€20.90/MES</h1>
							</div>
						</div>
						<h3 class="title">FIBRA 100</h3>
						<div class="light">
							<h4 class="muted regular">Fibra 100MB</h4>
                            <h4 class="muted regular">Alta, instalación y router WiFi GRATIS</h4>
                            <h4 class="muted regular">Sin línea fija</h4>
						</div>
					</div>
				</div>
                <div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h1 class="white">€30/MES</h1>
							</div>
						</div>
						<h3 class="title">FIBRA 1GB</h3>
						<div class="light">
							<h4 class="muted regular">Fibra 1000Mb simétricos!!!</h4>
                            <h4 class="muted regular">Alta, instalación y router WiFi GRATIS</h4>
                            <h4 class="muted regular">Línea fija opcional</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Pricing</h2>
				<h4 class="light white">Choose your favorite pricing plan and sign up today!</h4>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="frontend/img/pricing1.jpg">
							<h4 class="white">Yoga Pilates</h4>
							<h4 class="white regular light">$850.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
					<div class="pricing">
						<div class="box-main" data-img="frontend/img/pricing2.jpg">
							<h4 class="white">Cardio Training</h4>
							<h4 class="white regular light">$100.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section id="section-5f8b6dc6cb541" class="s123-module s123-module-contact layout-3" data-module-id="5f8b6dc6cb541" data-module-type-num="7"> <div data-aos="fade-up" class="container-fluid page_header_style page_header_style_ aos-init aos-animate"><div class="row"><div class="container"><div class="row modulesTitle"><div class="col-xs-12 text-center"> <h2 id="section-5f8b6dc6cb541-title" class="s123-page-header">CONTACTO</h2> <hr class="small"> <h4 id="section-5f8b6dc6cb541-slogan" class="s123-page-slogan"></h4> </div> </div> </div> </div> </div> <div class="container aos-init aos-animate" data-aos="fade-up"> <div class="row"> <div class="col-md-6"> <div class="row text-center"> <div class="col-md-5 preview-highlighter" style="text-align: center;"> <ul class="list-unstyled contact-as-details-container"> <li>Calle Maestro Serrano, 17, Paiporta, España</li> </ul> <ul class="list-unstyled contact-as-details-container"> <li><a class="social-icons-container" href="https://wa.me/34644744866" target="_blank"><img src="https://cdn-cms-s.f-static.net/files/icons/socialNetworksBrands/whatsApp-icon.png?v=r7241"><span dir="ltr">+34-644 744 866</span></a></li> <li><a href="mailto:hola@movy.es"><i class="svg-m s123-icon-converter  fa-fw" data-icon-name="envelope-o" style=" mask: url('https://static.s123-cdn-static.com/ready_uploads/svg/envelope-o.svg?v=2'); -webkit-mask: url('https://static.s123-cdn-static.com/ready_uploads/svg/envelope-o.svg?v=2');" data-ie11-classes=" fa-fw">&nbsp;</i>hola@movy.es</a></li> <li class="open_hours_field"><i class="svg-m s123-icon-converter fa-fw" data-icon-name="clock-o" style=" mask: url('https://static.s123-cdn-static.com/ready_uploads/svg/clock-o.svg?v=2'); -webkit-mask: url('https://static.s123-cdn-static.com/ready_uploads/svg/clock-o.svg?v=2');" data-ie11-classes="fa-fw">&nbsp;</i>Lunes a viernes 09:00-13:00
        Martes y jueves 17:00-20:00</li> </ul> </div> <form class="breakable contactUsForm " data-date-format="d/m/Y" data-click-action="thankYouMessage" novalidate="novalidate"> <div class="col-md-6 col-md-offset-1"> <div class="row"> <div class="col-md-6"> <div class="form-group"> <input type="text" name="contact_name" placeholder="Nombre" class="form-control" required="" data-msg-required="Este campo es necesario"> </div> </div> <div class="col-md-6"> <div class="form-group"> <input type="text" name="contact_phone" placeholder="Teléfono" class="form-control"> </div> </div> </div> <div class="form-group"> <input type="text" name="contact_email" placeholder="Dirección de correo electrónico" class="form-control s123-force-ltr" required="" data-msg-required="Este campo es necesario" data-rule-email="true" data-msg-email="Introduzca una dirección de correo electrónico válida."> </div> <div class="form-group"> <textarea class="form-control" name="contact_message" placeholder="Mensaje" style="min-height: 100px;"></textarea> </div> <button type="submit" class="btn btn-primary btn-block">Contacto</button> </div> <input type="hidden" name="w" value=""> <input type="hidden" name="websiteID" value="4383203"> <input type="hidden" name="moduleID" value="5f8b6dc6cb541"> <input type="hidden" name="layout" value="3"> <input type="hidden" name="recaptchaToken" value=""> </form> </div> </div> <div class="col-md-6"> <div class="s123-module-contact-map"> <iframe id="contact_6056e90dadf11" class="map-container iframeLazyload loaded" frameborder="0" style="pointer-events: none;" data-ll-status="loaded" src="https://maps-cdn.site123.com/include/globalMapDisplay.php?q=Calle+Maestro+Serrano%2C+17%2C+Paiporta%2C+Espa%C3%B1a&amp;z=15&amp;l=es&amp;ilfc=1"></iframe> </div> </div> </div> </div></section>
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Sign Up</h3>
				<form action="" class="popup-form">
					<input type="text" class="form-control form-white" placeholder="Full Name">
					<input type="text" class="form-control form-white" placeholder="Email Address">
					<div class="dropdown">
						<button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pricing Plan
						</button>
						<ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
							<li class="animated lightSpeedIn"><a href="#">1 month membership ($150)</a></li>
							<li class="animated lightSpeedIn"><a href="#">3 month membership ($350)</a></li>
							<li class="animated lightSpeedIn"><a href="#">1 year membership ($1000)</a></li>
							<li class="animated lightSpeedIn"><a href="#">Free trial class</a></li>
						</ul>
					</div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="None" id="squaredOne" name="check" />
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Reserve a Free Trial Class!</h3>
					<h5 class="light regular light-white">Shape your body and improve your health.</h5>
					<a href="#" class="btn btn-blue ripple trial-button">Start Free Trial</a>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Opening Hours <span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Mon - Fri</h5>
							<h3 class="regular white">9:00 - 22:00</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Sat - Sun</h5>
							<h3 class="regular white">10:00 - 18:00</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2015 All Rights Reserved. Powered by <a href="http://www.phir.co/">PHIr</a> exclusively for <a href="http://tympanus.net/codrops/">Codrops</a></p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
					</ul>
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
	<script src="frontend/js/jquery-1.11.1.min.js"></script>
	<script src="frontend/js/owl.carousel.min.js"></script>
	<script src="frontend/js/bootstrap.min.js"></script>
	<script src="frontend/js/wow.min.js"></script>
	<script src="frontend/js/typewriter.js"></script>
	<script src="frontend/js/jquery.onepagenav.js"></script>
	<script src="frontend/js/main.js"></script>
</body>

</html>
