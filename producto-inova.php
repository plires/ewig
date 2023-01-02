<?php
	
	require ('includes/config.inc.php');
  $current = 'productos';
  $product = 'inova';
  $system = 'corredizo';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Permite construir hojas de 1500x2500mm. La producción y el montaje son muy fáciles y cómodos, con una junta central adicional además de las juntas del marco y la hoja, el sistema de perfiles proporciona el máximo aislamiento térmico y acústico.">
	<title>EWIG - Aberturas | PRODUCTO - Inova</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido PRODUCTOS -->
	<section id="app" class="home productos inova">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Título -->
		<section class="container-fluid slide titulo">
			<div class="vertical"></div>
			<div class="row">
				<div class="col-md-12">
					<h1 data-aos="fade-left">Inova</h1>
					<h2 data-aos="fade-right">Corrediza con cierre hermético</h2>
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
						<img class="img-fluid" src="./img/productos/inova/slide.jpg" alt="slide hebe inova">
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
							Permite un acristalamiento de 24mm a 50mm de espesor para DVH / TVH. <br>
							Permite construir hojas de 1500x2500mm. La producción y el montaje son muy fáciles y cómodos, con una junta central adicional además de las juntas del marco y la hoja, el sistema de perfiles proporciona el máximo aislamiento térmico y acústico.
						</p>
						<p data-aos="fade-up">
							Gracias al cerradero de falleba especialmente diseñado, puede proporcionar ventilación solo moviendo la hoja 4 mm hacia adentro cuando lleva la maneta de la hoja en la posición cerrada a una posición paralela al suelo. Es posible detenerse en el punto deseado durante el movimiento del perfil de la hoja en el riel moviendo la maneta a la posición de cierre.     
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
								<img data-aos="fade-up" class="img-fluid" src="./img/productos/inova/prod-2.jpg" alt="producto hebe inova 2">
								<p data-aos="fade-up">Aislante térmico y acústico <br>con cierre hermético.</p>
							</div>
						</div>

					</div>

				</div>

				<div class="col-md-5 col-lg-4 prod_large">
					<img data-aos="fade-up" class="img-fluid" src="./img/productos/inova/prod-large.gif" alt="producto hebe inova  large">
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