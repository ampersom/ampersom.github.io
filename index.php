<!DOCTYPE HTML>
<html>
	<head>
		<title>AMPERSOM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description"
		content=
			"Soluciones tecnológicas para cualquier entidad">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="images/favico.ico">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Page Wrapper -->
			<div id="page-wrapper">
				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">AMPERSOM</a></h1>
						<nav>
							<a href="#menu">SERVICIOS</a>
						</nav>
					</header>
				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2 href="index.html">Servicios</h2>
							<ul class="links">
								<li><a tittle="Tecnologia web" href="web.html">TECNOLOGIA WEB</a></li>
								<li><a tittle="Diseño gráfico" href="grapdi.html">DISEÑO GRAFICO MULTIMEDIA</a></li>
								<li><a tittle="Redes y telecomunicaciones" href="netec.html">REDES Y TELECOMUNICACIONES</a></li>
								<li><a tittle="Soporte técnico" href="techsup.html">SOPORTE TÉCNICO</a></li>
								<!--
								<li><a tittle="Otros servicios" href="others.html">OTROS SERVICIOS</a></li>
								-->
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>
				<!-- Banner -->
				<section id="banner">
						<div class="inner">
							<div class="logo" href="images/favico.ico"><span class="icon fa-handshake-o"></span></div>
							<h2>Ampersom</h2>
							<p>El mejor aliado que tu empresa pueda tener</p>
						</div>
					</section>
				<!-- Wrapper -->
					<section id="wrapper">
						<!-- One -->
						<section id="three" class="wrapper spotlight style3">
							<div class="inner">
								<a class="image"><img src="images/index/quienessomos.jpg" alt="" /></a>
								<div class="content">
									<h2 class="major">Quienes somos..</h2>
										<p>Un equipo de profesionales que proporcionamos soluciones tecnológicas
											novedosas, originales, eficientes y óptimas
											para cualquier entidad y necesidad.</p>
								</div>
							</div>
						</section>
						<!-- Two -->
							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<a class="image"><img src="images/index/mision.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Nuestra misión</h2>
										<p>Proveer el mejor servicio informático mediante las mejores soluciones empresariales
											para obtener los mejores resultados de impacto comercial, innovación, competitividad, confianza y credibilidad en sus clientes
										</p>
									</div>
								</div>
							</section>
						<!-- Three -->
						<section id="one" class="wrapper spotlight style1">
							<div class="inner">
								<a class="image"><img src="images/index/vision.jpg" alt="" /></a>
								<div class="content">
									<h2 class="major">Nuestra visión</h2>
									<p>	Ser la mejor opción donde usted encuentre las soluciones
										que requiera para hacer crecer su negocio o empresa;
										y que juntos podamos destacar en nuestros productos y servicios.<p>
								</div>
							</div>
						</section>
						<!-- Four -->
							<section id="four" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">Servicios</h2>
									<p>Lo que te impulsará hacia el éxito...</p>
									<section class="features">
										<article>
											<a class="image"><img src="images/index/tecnologiaweb.jpg"/></a>
											<h3 class="major">Tecnologia Web</h3>
											<p>Diseñamos, desarrollamos, gestionamos, comercializamos, y monetizamos
												la mejor solución para tu empresa;
												Presentamos tu mejor imagen al mundo e
												implementamos tecnologia para que tus procesos e ingresos seas los mejores.
											</p>
											<a href="web.html" class="special">Saber más</a>
										</article>
										<article>
											<a class="image"><img src="images/index/diseñograficomultimedia.jpg"/></a>
											<h3 class="major">Diseño gráfico multimedia</h3>
											<p>Proveemos la mejor imagen de tu empresa o negocio.
												Te identificamos y hacemos resaltar tu marca o nombre,
												impresionando a tus clientes con tus mejor esencia.</p>
											<a href="grapdi.html" class="special">Saber más</a>
										</article>
										<article>
											<a class="image"><img src="images/index/redesytelecomunicaciones.jpg"/></a>
											<h3 class="major">Redes y telecomunicaciones</h3>
											<p>Te conectamos con el mundo.
												Hacemos tu comunicación mas eficiente con los mejores dispositivos del mercado.  </p>
											<a href="netec.html" class="special">Saber más</a>
										</article>
										<article>
											<a class="image"><img src="images/index/soportetecnico.jpg"/></a>
											<h3 class="major">Soporte técnico</h3>
											<p>Cuando nos necesites, ahi estaremos. Somos la solución a tus problemas tecnológicos, no dudes en contactarnos.</p>
											<a href="techsup.html" class="special">Saber más</a>
										</article>
									</section>
									<ul class="actions">
										<li><a href="others.html" class="button">Otros servicios</a></li>
									</ul>
								</div>
							</section>
					</section>
				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">Contáctanos</h2>
							<a name="contact"></a>
							<p>Crezcamos juntos, haznos tu mejor aliado.</p>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Nombre</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">COrreo electrónico</label>
										<input type="email" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Mensaje</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Enviar Mensaje"/></li>
								</ul>
							</form>
							<?php
								if (isset($_POST['nombre']) && !empty($_POST['nombre'])){
									$nombre = addslashes($_POST['nombre']);
									$email = addslashes($_POST['email']);
									$msg = addslashes($_POST['msg']);
									
									$para = "somarribasaul@gmail.com";
									$asunto = "Mensaje Sitio Web Ampersom";
									$cuerpo = "Nombre: ".$nombre."  E-mail: ".$email."  Mensaje: ".$msg;
									
									$encabezado = "From: ampersom@gmail.com"."\r\n".
												"Replay-To: ".$email."\r\n".
												"X-Mailer: PHP/".phpversion();
									
									mail($para, $asunto, $cuerpo, $encabezado);
									echo "<h5>Mensaje enviado con éxito</h5>";
									exit;
								}
							?>
							<ul class="contact">
								<li class="fa-home">
									Ampersom<br />
									Startup Nicaragua<br />
								</li>
								<li class="fa-phone">(+505) 8799 6201</li>
								<li class="fa-envelope"><a href="mailto:ampersom@gmail.com">ampersom@gmail.com</a></li>
							</ul>
							<ul class="copyright">
								<li>AMPERSOM | All rights reserved.</li>
							</ul>
						</div>
					</section>
			</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>