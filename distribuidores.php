<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'distribuidores';
  $product = '-';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="¿Por qué convertirte en partner Ewig? Porque vas a formar parte de una empresa que tiene como base la calidad de sus productos, el buen trato para con las personas y el cuidado del ambiente.">
	<title>EWIG - Aberturas | DISTRIBUIDORES</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido DISTRIBUIDORES -->
	<section id="app" class="empresa arquitectos distribuidores">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Título -->
		<section class="container titulo">
			<div class="row">
				<div class="col-md-12">
					<h1 data-aos="fade-up">Distribuidores</h1>
				</div>
			</div>
		</section>
		<!-- Título end -->

		<!-- Descripción -->
		<section class="container-fluid descripcion">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-10 offset-lg-1">
						<div class="content">
							<h2 data-aos="fade-up">¿Por qué convertirte <br>en partner Ewig?</h2>
							<p data-aos="fade-up">
								Porque vas a formar parte de una empresa que tiene como base la calidad de sus productos, el buen trato para con las personas y el cuidado del ambiente.
							</p> <br>
							<p data-aos="fade-up">
								Además vas a poder comercializar un producto de vanguardia, con los más altos estándares de calidad producidos con tecnología alemana.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Descripción end -->

		<!-- Galería -->
		<section data-aos="fade-up" class="container-fluid section_galeria">
			<div class="row">
				<div class="col-md-12">
					<div class="galeria slider-g">
			      <div>
			        <img class="img-fluid" src="./img/arquitectos/galeria-arquitectos-a.jpg" alt="Galería - arquitectos a">
			      </div>
			      <div>
			        <img class="img-fluid" src="./img/arquitectos/galeria-arquitectos-b.jpg" alt="Galería - arquitectos b">
			      </div>
			      <div>
			        <img class="img-fluid" src="./img/arquitectos/galeria-arquitectos-c.jpg" alt="Galería - arquitectos c">
			      </div>
			      <div>
			        <img class="img-fluid" src="./img/arquitectos/galeria-arquitectos-a.jpg" alt="Galería - arquitectos a">
			      </div>
			      <div>
			        <img class="img-fluid" src="./img/arquitectos/galeria-arquitectos-b.jpg" alt="Galería - arquitectos b">
			      </div>
			      <div>
			        <img class="img-fluid" src="./img/arquitectos/galeria-arquitectos-c.jpg" alt="Galería - arquitectos c">
			      </div>
			      <div>
			        <img class="img-fluid" src="./img/arquitectos/galeria-arquitectos-a.jpg" alt="Galería - arquitectos a">
			      </div>
			      <div>
			        <img class="img-fluid" src="./img/arquitectos/galeria-arquitectos-b.jpg" alt="Galería - arquitectos b">
			      </div>
			      <div>
			        <img class="img-fluid" src="./img/arquitectos/galeria-arquitectos-c.jpg" alt="Galería - arquitectos c">
			      </div>
					</div>
				</div>
			</div>
		</section>
		<!-- Galería end -->

		<!-- Propiedades -->
		<?php include_once('./includes/modulo-propiedades-producto.php'); ?>

		<!-- Características -->
		<section class="container-fluid caracteristicas">
			<div class="container">
				<div class="row">

					<div data-aos="fade-up" class="col-md-9">
						<div class="content_caracteristicas">

							<p data-aos="fade-up">
								Las ventanas <span>EWIG</span> son sumamente versátiles de facil instalación aportan calidad a cualquier espacio, además de contribuir al ahorro energético gracias a sus características aislantes, sumado a su construcción libre de plomo, se convierten en un producto <span>ecoamigable.</span>
							</p>

						</div>
					</div>

					<div class="col-md-9">
						<div class="content_caracteristicas">
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Características end -->

		<!-- Formulario -->
		<section class="container-fluid modulo_contacto formulario">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 data-aos="fade-up">¡Sumate ahora!</h2>

						<!-- Mensages -->
						<?php include_once('./includes/msg.php'); ?>

						<!-- Errors -->
						<?php include_once('./includes/errors.php'); ?>

						<form data-aos="fade-up" id="form-contacto" action="./php/validate-form.php" method="post" class="needs-validation" novalidate>

							<input name="origin" type="hidden" value="Formulario de Distribuidores">
							<input name="current" type="hidden" value="<?= $current_filename ?>">

							<?php 
								include_once('./includes/parts/input-name.php');
								include_once('./includes/parts/input-email.php');
								include_once('./includes/parts/input-phone.php');
								include_once('./includes/parts/input-zone.php');
								include_once('./includes/parts/input-comments.php');
								include_once('./includes/parts/btn-send.php');
							?>

						</form>

					</div>
				</div>
			</div>
		</section>
		<!-- Formulario end -->

		

	</section>
	<!-- Contenido DISTRIBUIDORES end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="./dist/bundle.js"></script>

</body>

</html>