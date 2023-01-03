<?php
	
	require ('includes/config.inc.php');
  $current = 'productos';
  $product = 'hebe_schiebe';
  $system = 'corredizo';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="La profundidad del marco tiene un ancho de 170 mm y 6-7 cámaras. Para garantizar el máximo aislamiento acústico y térmico cuenta con un ancho de perfil de hoja de 70 mm y 5 cámaras, se puede utilizar con vidrio de calidad en el rango de 20, 24, 28, 34, 40 mm.">
	<title>EWIG - Aberturas | PRODUCTO - Hebe Schiebe</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido PRODUCTOS -->
	<section id="app" class="home productos schiebe">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Título -->
		<section class="container-fluid slide titulo">
			<div class="vertical"></div>
			<div class="row">
				<div class="col-md-12">
					<h1 data-aos="fade-left">Hebe Schiebe</h1>
					<h2 data-aos="fade-right">Sistema elevadora</h2>
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
						<img class="img-fluid" src="./img/productos/schiebe/slide.jpg" alt="slide hebe schiebe">
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
							La profundidad del marco tiene un ancho de 170 mm y 6-7 cámaras.
							Para garantizar el máximo aislamiento acústico y térmico cuenta con un ancho de perfil de hoja de 70 mm y 5 cámaras, se puede utilizar con vidrio de calidad en el rango de 20, 24, 28, 34, 40 mm. <br>
							El perfil del marco está diseñado para ser montado y desmontado en el sitio, lo que brinda facilidad de transporte y armado.
						</p>
						<p data-aos="fade-up">
							Esto asegura que el sistema puede ser utilizado en luces amplias donde la resistencia a la carga de viento sea mayor, por medio de refuerzos conformados especialmente utilizados en los perfiles de las hojas.
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
								<img data-aos="fade-up" class="img-fluid" src="./img/productos/schiebe/prod-1.jpg" alt="producto hebe schiabe 1">
								<p data-aos="fade-up">Aplicaciones de umbral <br>de aluminio alto.</p>
							</div>
						</div>

						<div class="col-6">
							<div class="content_detalle">
								<img data-aos="fade-up" class="img-fluid" src="./img/productos/schiebe/prod-2.jpg" alt="producto hebe schiabe 2">
								<p data-aos="fade-up">Aplicaciones de umbral <br>de aluminio bajo.</p>
							</div>
						</div>

					</div>

				</div>

				<div class="col-md-5 col-lg-4 prod_large">
					<img data-aos="fade-up" class="img-fluid" src="./img/productos/schiebe/prod-large.jpg" alt="producto hebe schiab  large">
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

	<script src="./dist/bundle.js"></script>

</body>

</html>