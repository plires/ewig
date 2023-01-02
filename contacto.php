<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'contacto';
  $product = '-';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Podés consultar con nuestro equipo de expertos las dudas o consultas que necesites.">
	<title>EWIG - Aberturas | CONTACTO</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido CONTACTO -->
	<section id="app" class="empresa contacto">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Título -->
		<section class="container titulo">
			<div class="row">
				<div class="col-md-6">
					<h1 data-aos="fade-up">Contacto</h1>
				</div>
				<div class="col-md-6 frase">
					<p data-aos="fade-up">Podés consultar con nuestro <br>equipo de expertos las dudas <br>o consultas que necesites.</p>
				</div>
			</div>
		</section>
		<!-- Título end -->

		<!-- Datos -->
		<section class="container-fluid datos">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-10 offset-lg-1">
						<div class="row">

							<div class="col-md-4">
								<div class="content">
									<a class="transition" href="tel:541100000000">teléfono <br>+54 11 0000 0000</a>
								</div>
							</div>

							<div class="col-md-4">
								<div class="content">
									<a class="transition" href="mailto:info@ewig.com.ar">mail <br>info@ewig.com.ar</a>
								</div>
							</div>

							<div class="col-md-4">
								<div class="content">
									<a 
										class="transition" 
										href="https://goo.gl/maps/jez8UJm4bfHQxkYN8"
										rel="noopener"
										target="_blank">dirección <br>Nombre de la Calle 1234 <br>Buenos Aires <br>Argentina</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Datos end -->

		<!-- Formulario de Contacto -->
		<section class="container-fluid modulo_contacto">
			<div class="row">

				<div data-aos="fade-up" class="col-md-5 formulario">
					<div class="content_formulario">
						<h3>Escribínos</h3>
						
						<!-- Mensages -->
						<?php include_once('./includes/msg.php'); ?>

						<!-- Errors -->
						<?php include_once('./includes/errors.php'); ?>

						<form id="form-contacto" action="./php/validate-form.php" method="post" class="needs-validation" novalidate>

							<input name="origin" type="hidden" value="Formulario de Contacto">
							<input name="current" type="hidden" value="<?= $current_filename ?>">

							<?php 
								include_once('./includes/parts/input-name.php');
								include_once('./includes/parts/input-email.php');
								include_once('./includes/parts/input-phone.php');
								include_once('./includes/parts/input-comments.php');
								include_once('./includes/parts/btn-send.php');
							?>

						</form>
					</div>
				</div>

				<div data-aos="fade-up" class="col-md-7 mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.407964197681!2d-58.46317488424978!3d-34.56854246314585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb53e026c3655%3A0x91483c3a936bfb78!2sLibre%20Comunicacion!5e0!3m2!1ses-419!2sar!4v1672691529535!5m2!1ses-419!2sar" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>

			</div>
		</section>
		<!-- Formulario de Contacto end -->

		<!-- Arquitectos & Distribuidores -->
		<?php include_once('./includes/modulo-arquitectos-distribuidores.php'); ?>

	</section>
	<!-- Contenido CONTACTO end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="./dist/bundle.js"></script>

</body>

</html>