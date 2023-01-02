<?php
	
	require ('includes/config.inc.php');
  $current = 'productos';
  $product = 'compact';
  $system = 'corredizo';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="La serie corrediza compacta de 60mm se puede aplicar en combinaciones dobles, triples y cuádruples en vanos amplios como ventanas y puertas, y brindan una vista más limpia.">
	<title>EWIG - Aberturas | PRODUCTO - Compact</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido PRODUCTOS -->
	<section id="app" class="home productos inova compact">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Título -->
		<section class="container-fluid slide titulo">
			<div class="vertical"></div>
			<div class="row">
				<div class="col-md-12">
					<h1 data-aos="fade-left">Compact</h1>
					<h2 data-aos="fade-right">Compacta corrediza</h2>
				</div>
			</div>
		</section>
		<!-- Título end -->

		<!-- Slide -->
		<section class="container-fluid slide">
			<div class="horizontal"><i></i></div>
			<div class="vertical"></div>
			<div class="row">
				<div class="col-md-10 offset-md-2">
					<div class="content_slide">
						<img class="img-fluid" src="./img/productos/compact/slide.jpg" alt="slide hebe compact">
					</div>
				</div>
			</div>
		</section>
		<!-- Slide end -->

		<!-- Caracteristicas -->
		<section class="container-fluid slide caracteristicas">
			<div class="vertical"></div>
			<div class="row">
				<div class="col-md-10 offset-md-2">
					<div class="content_caracteristicas">
						<p data-aos="fade-up">
							La serie corrediza compacta de 60mm se puede aplicar en combinaciones dobles, triples y cuádruples en vanos amplios como ventanas y puertas, y brindan una vista más limpia.
						</p>
						<p data-aos="fade-up">
							Las aplicaciones de puertas y ventanas de la serie corrediza brindan espacios amplios y refrescantes. Las hojas que se deslizan en la dirección de su propio eje en lugar de hojas que sean rebatibles permiten un uso más eficiente de los espacios.
						</p>
						<p data-aos="fade-up">
							El drenaje de agua se hace sin obstáculos con el diseño especial. <br>
							La aplicación de los mosquiteros están disponibles para todos los casos deslizantes. Mediante el perfil de marco diseñado opcionalmente, se puede utilizar tanto como marco o como travesaño intermedio.
						</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Caracteristicas end -->

		<!-- Detalles -->
		<section class="container-fluid detalles">

			<div class="row">
				
				<div class="col-md-7 col-lg-8">
					
					<div class="row iconos">
						<div data-aos="fade-up" class="col-4 col-md-3 content_iconos">
							&nbsp;
						</div>

						<div data-aos="fade-up" class="col-4 col-md-3 content_iconos">
							<img class="img-fluid" src="./img/arquitectos/eficiencia-energetica.png" alt="eficiencia energetica">
							<p>Eficiencia <br>energética</p>
						</div>

						<div data-aos="fade-up" class="col-4 col-md-3 content_iconos">
							<img class="img-fluid" src="./img/arquitectos/camara-termica.png" alt="Cámara térmica">
							<p>Cámara <br>térmica</p>
						</div>

						<div data-aos="fade-up" class="col-4 col-md-3 content_iconos">
							<img class="img-fluid" src="./img/arquitectos/libre-plomo.png" alt="Libre de plomo">
							<p>Libre de <br>plomo</p>
						</div>
					</div>

					<div class="row prod_small">

						<div class="col-md-6">
							<div class="content_detalle">
								&nbsp;
							</div>
						</div>

						<div class="col-md-6">
							<div class="content_detalle">
								<img data-aos="fade-up" class="img-fluid" src="./img/productos/compact/prod-2.jpg" alt="producto hebe compact 2">
								<p data-aos="fade-up">Aislante térmico y acústico <br>con cierre hermético.</p>
							</div>
						</div>

					</div>

				</div>

				<div class="col-md-5 col-lg-4 prod_large">
					<img data-aos="fade-up" class="img-fluid" src="./img/productos/compact/prod-large.gif" alt="producto hebe compact large">
				</div>

			</div>

		</section>
		<!-- Detalles end -->

		<!-- Colores -->
		<?php include_once('./includes/modulo-colores.php'); ?>

		<!-- Sistemas -->
		<?php include_once('./includes/modulo-sistemas-apertura.php'); ?>

		<!-- Galería Productos -->
		<?php include_once('./includes/galeria-productos.php'); ?>

		<!-- Ventajas Técnicas -->
		<?php include_once('./includes/modulo-ventajas-tecnicas.php'); ?>

		<!-- Nuestros Sistemas -->
		<?php include_once('./includes/modulo-nuestros-sistemas.php'); ?>

		<!-- Arquitectos & Distribuidores -->
		<?php include_once('./includes/modulo-arquitectos-distribuidores.php'); ?>

	</section>
	<!-- Contenido PRODUCTOS end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="./dist/bundle.js"></script>

</body>

</html>