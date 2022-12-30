<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'arquitectos';
  $product = '-';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="El sistema constructivo de nuestras ventanas permite un ahorro significativo de energía.">
	<title>EWIG - Aberturas | ARQUITECTOS</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido ARQUITECTOS -->
	<section id="app" class="empresa arquitectos">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Título -->
		<section class="container titulo">
			<div class="row">
				<div class="col-md-12">
					<h1 data-aos="fade-up">Arquitectos</h1>
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
							<h2 data-aos="fade-up">¿Por qué instalar <br>ventanas Ewig?</h2>
							<p data-aos="fade-up">
								El sistema constructivo de nuestras ventanas permite un ahorro significativo de energía. <br>
								Ya que además de aislar el sonido también aislan la temperatura permitiendo mantener el interior del ambiente a temperatura controlada lo que se transmite en un menor uso de los sistemas de calefacción y refrigeración, reduciendo los costos y contribuyendo al cuidado del medio ambiente.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Descripción end -->

		<!-- Características -->
		<section class="container-fluid caracterisitcas">
			<div class="container">
				<div class="row">

					<div class="col-lg-10 offset-lg-1 content_caracteristicas">
						
						<div class="row">
							<div data-aos="fade-up" class="col-4 content">
								<img class="img-fluid" src="./img/arquitectos/eficiencia-energetica.png" alt="eficiencia energetica">
								<p>Eficiencia <br>energética</p>
							</div>

							<div data-aos="fade-up" class="col-4 content">
								<img class="img-fluid" src="./img/arquitectos/camara-termica.png" alt="Cámara térmica">
								<p>Cámara <br>térmica</p>
							</div>

							<div data-aos="fade-up" class="col-4 content">
								<img class="img-fluid" src="./img/arquitectos/libre-plomo.png" alt="Libre de plomo">
								<p>Libre de <br>plomo</p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8 offset-md-4 content_descripcion">
								<p data-aos="fade-up">
									Las ventanas <span>EWIG</span> son fabricadas bajo estríctos controles de calidad, libres de plomo, conviertiendose en un producto <span>ecoamigable</span>, cuidando tanto a los ususarios como al planeta, otra ventaja imprescindible a la hora de encarar una nueva obra.
								</p>
							</div>
						</div>

					</div>

				</div>

			</div>
		</section>
		<!-- Características end -->

		<!-- Arquitectura Sostenible -->
		<section class="container-fluid arq_sostenible">
			<div class="container">
				<div class="row">

					<div class="col-lg-10 offset-lg-1">
						
						<div class="row">
							<div class="col-md-4 content_image">
								<img data-aos="fade-up" class="img-fluid" src="./img/arquitectos/arquitectura-sostenible-small.jpg" alt="arquitectura sostenible">
							</div>
							<div class="col-md-8 content_data">
								<div class="title">
									<div class="line_vertical"></div>
									<h2 data-aos="fade-up">Arquitectura <br>sostenible</h2>
									<div class="line_horizontal"></div>
								</div>
								<p data-aos="fade-up">
									La arquitectura actual va camino a convertirse en <span>arquitectura sostenible</span>, ya que considera los aspectos sociales y culturales tanto como los económicos a lahora de encarar un proyecto es por eso que la conciencia ambiental va a determinar el futuro de la actividad.
								</p>
								<p data-aos="fade-up">
									Sumados a esa tendencia desarrollamos productos cuidando los recursos y protegiendo el ambiente. Además, por sus materiales son duraderos y sus componentes se pueden reciclar. 
								</p>
							</div>
						</div>

					</div>

				</div>

			</div>
		</section>
		<!-- Arquitectura Sostenible end -->

		<!-- Formulario -->
		<section class="container-fluid modulo_contacto formulario">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 data-aos="fade-up">¿Tenés un proyecto? <br>instalá EWIG</h2>
						<h4 data-aos="fade-up">Sumate al futuro</h4>

						<!-- Mensages -->
						<?php include_once('./includes/msg.php'); ?>

						<!-- Errors -->
						<?php include_once('./includes/errors.php'); ?>

						<form data-aos="fade-up" id="form-contacto" action="./php/validate-form.php" method="post" class="needs-validation" novalidate>

							<input name="origin" type="hidden" value="Formulario de Arquitectos">
							<input name="current" type="hidden" value="<?= $current_filename ?>">

							<?php 
								include_once('./includes/parts/input-name.php');
								include_once('./includes/parts/input-email.php');
								include_once('./includes/parts/input-phone.php');
								include_once('./includes/parts/input-company.php');
								include_once('./includes/parts/input-comments.php');
								include_once('./includes/parts/btn-send.php');
							?>

						</form>

					</div>
				</div>
			</div>
		</section>
		<!-- Formulario end -->

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

	</section>
	<!-- Contenido ARQUITECTOS end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="./dist/bundle.js"></script>

</body>

</html>