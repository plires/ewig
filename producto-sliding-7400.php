<?php
	
	require ('includes/config.inc.php');
  $current = 'productos';
  $product = 'sliding_7400';
  $system = 'corredizo';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Las series corredizas se pueden aplicar en combinaciones dobles, triples, cuádruple y séxtuple en vanos amplios como ventanas y puertas, brindando una vista más amplia.">
	<title>EWIG - Aberturas | PRODUCTO - Sliding 7400</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido PRODUCTOS -->
	<section id="app" class="home productos inova sliding_7400">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Título -->
		<section class="container-fluid slide titulo">
			<div class="vertical"></div>
			<div class="row">
				<div class="col-md-12">
					<h1 data-aos="fade-left">Sliding 7400</h1>
					<h2 data-aos="fade-right">Corrediza clásica</h2>
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
						<img class="img-fluid" src="./img/productos/sliding-7400/slide.jpg" alt="slide hebe sliding 7400">
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
							Las series corredizas se pueden aplicar en combinaciones dobles, triples, cuádruple y séxtuple en vanos amplios como ventanas y puertas, brindando una vista más amplia. <br>
							Las aplicaciones de puertas y ventanas de la serie corrediza brindan espacios amplios y refrescantes. <br>
							Las hojas que se deslizan en la dirección de su propio eje en lugar de hojas que se abaten, permiten un uso más eficiente de los espacios.
						<p data-aos="fade-up">
							Por su diseño el marco tiene una inclinación hacia el exterior que facilita la descarga del agua, su estanqueidad es alta. El marco en el cruce de hoja central cuenta con tapones para marcos deslizantes con deflectores y felpas con fin seal. <br>
							Para garantizar el máximo aislamiento acústico y térmico, es posible utilizar vidrios de calidad en el rango de 4,20, 24 y 30 mm.
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

						<div class="col-6">
							<div class="content_detalle">
								<img data-aos="fade-up" class="img-fluid" src="./img/productos/sliding-7400/prod-1.jpg" alt="producto hebe sliding-7400 1">
								<p data-aos="fade-up">74</p>
							</div>
						</div>

						<div class="col-6">
							<div class="content_detalle">
								<img data-aos="fade-up" class="img-fluid" src="./img/productos/sliding-7400/prod-2.jpg" alt="producto hebe sliding-7400 2">
								<p data-aos="fade-up">137</p>
							</div>
						</div>

					</div>

				</div>

				<div class="col-md-5 col-lg-4 prod_large">
					<img data-aos="fade-up" class="img-fluid" src="./img/productos/sliding-7400/prod-large.gif" alt="producto hebe sliding-7400 large">
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