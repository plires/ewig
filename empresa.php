<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'empresa';
  $product = '-';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="En Ewig te decimos que vamos a estar siempre y para siempre. Siempre, porque vas a tener tu pedido en el momento en que lo necesites.">
	<title>EWIG - Aberturas | EMPRESA</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido EMPRESA -->
	<section id="app" class="empresa">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Título -->
		<section class="container titulo">
			<div class="row">
				<div class="col-md-12">
					<h1 data-aos="fade-up">Empresa</h1>
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
							<p data-aos="fade-up">
								<span>En Ewig te decimos que vamos a estar siempre y para siempre.</span> <br>
								Siempre, porque vas a tener tu pedido en el momento en que lo necesites. <br>
								Para Siempre, porque contás con nosotros como aliados para crecer. <br>
								Siempre, porque tenemos variedad de productos todo el tiempo. <br>
								Para siempre, porque contás con productos que duran mucho más. <br>
								Siempre, porque estamos para brindarte el mejor servicio. <br>
								Para Siempre, porque vas a pensar en nosotros en cada etapa de tu negocio.
							</p>
							<p data-aos="fade-up">
								En cualquier momento, en todas las ocasiones y circunstancias. <span>EWIG. Siempre y para Siempre.</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Descripción end -->

		<!-- Formulario de Contacto -->
		<section class="container-fluid modulo_contacto">
			<div class="container">
				<div class="row">

					<div data-aos="fade-up" class="col-md-9 formulario">
						<div class="content_formulario">
							<h3>¿Querés obtener más <br>información de <span>EWIG</span> o <br>tenés alguna pregunta?</h3>
							
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

					<div class="col-md-9">
						<div class="content_formulario">
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Formulario de Contacto end -->

		<!-- Video Completo -->
		<section class="video_completo container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="content">
							<div data-aos="fade-up" class='hytPlayerWrapOuter'>
								<div class='hytPlayerWrap ratio ratio-16x9'>
									<iframe 
										src='https://www.youtube.com/embed/NQ7LYluGZrA?rel=0&enablejsapi=1'
										frameborder='0' >
									</iframe>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- Video Completo end -->

		<!-- Arquitectos & Distribuidores -->
		<?php include_once('./includes/modulo-arquitectos-distribuidores.php'); ?>

	</section>
	<!-- Contenido EMPRESA end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="./dist/bundle.js"></script>

</body>

</html>