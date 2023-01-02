<?php
	
	require ('includes/config.inc.php');
  $current = 'productos';
  $product = 'new_elegans';
  $system = 'batiente';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="New Elegans 60mm 4 cámaras ofrece alternativas de solución para quienes buscan economía junto con alta calidad en proyectos de vivienda y departamentos.">
	<title>EWIG - Aberturas | PRODUCTO - New Elegans</title>

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
					<h1 data-aos="fade-left">New Elegans</h1>
					<h2 data-aos="fade-right">Elegans 60</h2>
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
						<img class="img-fluid" src="./img/productos/new-elegans/slide.jpg" alt="slide hebe new-elegans">
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
							New Elegans 60mm 4 cámaras ofrece alternativas de solución para quienes buscan economía junto con alta calidad en proyectos de vivienda y departamentos.
						</p>
						<p data-aos="fade-up">
							Para garantizar el máximo aislamiento acústico y térmico con su diseño de 4 cámaras, brinda la oportunidad de uso para vidrios de calidad entre el rango de 4, 20, 24, 30 mm y diferentes opciones de junquillos.
						</p>
						<p data-aos="fade-up">
							Tiene un aspecto minimalista por sus líneas puras, y un diseño diferente con cámara de drenaje de agua inclinada hacia el exterior y en ángulo
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
								<img data-aos="fade-up" class="img-fluid" src="./img/productos/new-elegans/prod-2.jpg" alt="producto hebe new-elegans 2">
								<p data-aos="fade-up">Ofrece economía <br>y alta calidad.</p>
							</div>
						</div>

					</div>

				</div>

				<div class="col-md-5 col-lg-4 prod_large">
					<img data-aos="fade-up" class="img-fluid" src="./img/productos/new-elegans/prod-large.gif" alt="producto hebe new-elegans large">
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