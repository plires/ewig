<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'home';
  $product = 'producto_3';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="La premisa fundamental de nuestros productos es brindar calidad y confort a cualquier espacio.">
	<title>EWIG - Aberturas | HOME</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido HOME -->
	<section id="app" class="home">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Slide -->
		<section class="container-fluid slide">
			<div class="horizontal"><i></i></div>
			<div class="vertical"></div>
			<div class="row">
				<div class="col-md-10 offset-md-2">
					<div id="carouselHome" class="carousel content_slide carousel-fade" data-bs-ride="carousel">

					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="./img/home/slide/slide-a-desktop.jpg" class="d-block w-100" alt="slide a">
					    </div>

					    <div class="carousel-item">
					      <img src="./img/home/slide/slide-b-desktop.jpg" class="d-block w-100" alt="slide b">
					    </div>
					  </div>

					  <h2 data-aos="fade-right">Siempre<br><span>y para siempre.</span></h2>

					  <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Anterior</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Siguiente</span>
					  </button>

					</div>				
				</div>
			</div>
		</section>
		<!-- Slide end -->

		<!-- Carrusel Aspiracional -->
		<section class="container-fluid carrusel_aspiracional">
			<div class="horizontal"></div>
			<div class="vertical"></div>
			<div class="row">
				<div data-aos="fade-up" class="col-md-3 content_frase">
					<p>La premisa fundamental <br>de nuestros productos es <br>brindar <span>calidad y confort</span> <br>a cualquier espacio.</p>
				</div>
				<div class="col-md-9 content_slide_img">
					<h1 data-aos="fade-up">Productos</h1>

					<!-- Slider main container -->
					<div data-aos="fade-up" class="swiper">
					  <!-- Additional required wrapper -->
					  <div class="swiper-wrapper">
					    <!-- Slides -->
					    <div class="swiper-slide">
					    	<img class="img-fluid" src="./img/home/carrusel-aspiracional/carrusel-a.jpg" alt="carrusel ventanas a">
					    </div>
					    <div class="swiper-slide">
					    	<img class="img-fluid" src="./img/home/carrusel-aspiracional/carrusel-b.jpg" alt="carrusel ventanas b">
					    </div>
					    <div class="swiper-slide">
					    	<img class="img-fluid" src="./img/home/carrusel-aspiracional/carrusel-c.jpg" alt="carrusel ventanas c">
					    </div>
					    <div class="swiper-slide">
					    	<img class="img-fluid" src="./img/home/carrusel-aspiracional/carrusel-a.jpg" alt="carrusel ventanas a">
					    </div>
					    <div class="swiper-slide">
					    	<img class="img-fluid" src="./img/home/carrusel-aspiracional/carrusel-b.jpg" alt="carrusel ventanas b">
					    </div>
					    <div class="swiper-slide">
					    	<img class="img-fluid" src="./img/home/carrusel-aspiracional/carrusel-c.jpg" alt="carrusel ventanas c">
					    </div>
					    <div class="swiper-slide">
					    	<img class="img-fluid" src="./img/home/carrusel-aspiracional/carrusel-a.jpg" alt="carrusel ventanas a">
					    </div>
					    <div class="swiper-slide">
					    	<img class="img-fluid" src="./img/home/carrusel-aspiracional/carrusel-b.jpg" alt="carrusel ventanas b">
					    </div>
					    <div class="swiper-slide">
					    	<img class="img-fluid" src="./img/home/carrusel-aspiracional/carrusel-c.jpg" alt="carrusel ventanas c">
					    </div>
					  </div>
					  <div class="swiper-button-next"></div>
			      <div class="swiper-button-prev"></div>
			      <div class="swiper-pagination"></div>
					</div>
			
				</div>
			</div>
		</section>
		<!-- Carrusel Aspiracional end -->

		<!-- Frase Descriptiva -->
		<section class="container-fluid frase_descriptiva">
			<div class="horizontal"><i></i></div>
			<div class="vertical"><i></i></div>
			<div class="row">
				<div data-aos="fade-up" class="col-md-9 offset-md-3">
					El PVC-U es el material más utilizado para ventanas. <br>
					Con una excelente relación calidad – precio y <br>
					excelentes propiedades en cuanto a aislamiento, <br>
					confort y durabilidad hacen que sea la mejor opción.
				</div>
			</div>
		</section>
		<!-- Frase Descriptiva end -->

		<!-- Nuestros Sistemas -->
		<section class="container-fluid nuestros_sistemas">
			<div class="horizontal"><i></i></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Nuestros Sistemas</h2>
					</div>

					<div class="col-md-12 content_productos">
						
						<div data-aos="fade-up" class="producto">
							<a href="#">
								<img class="img-fluid transition" src="./img/home/productos/new-elegans.jpg" alt="new elegans">
							</a>
							<h3>NEW ELEGANS</h3>
						</div>

						<div data-aos="fade-up" class="producto">
							<a href="#">
								<img class="img-fluid transition" src="./img/home/productos/sliding-7400.jpg" alt="sliding 7400s">
							</a>
							<h3>SLIDING 7400</h3>
						</div>

						<div data-aos="fade-up" class="producto">
							<a href="#">
								<img class="img-fluid transition" src="./img/home/productos/compact.jpg" alt="compact">
							</a>
							<h3>INOVA</h3>
						</div>

						<div data-aos="fade-up" class="producto">
							<a href="#">
								<img class="img-fluid transition" src="./img/home/productos/hebe-schiebe.jpg" alt="hebe schiebe">
							</a>
							<h3>COMPACT</h3>
						</div>

						<div data-aos="fade-up" class="producto">
							<a href="#">
								<img class="img-fluid transition" src="./img/home/productos/inova.jpg" alt="inova">
							</a>
							<h3>HEBE SCHIEBE</h3>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- Nuestros Sistemas end -->

		<!-- Arquitectos & Distribuidores -->
		<section class="container-fluid arq_dist">
			<div class="container">
				<div class="row">
					<div class="col-md-6 content">
						<h3 data-aos="fade-up">Arquitectos</h3>
						<p data-aos="fade-up">
							Conocé las ventajas de utilizar un producto de vanguardia fabricado bajo los más altos estándares de calidad.
						</p>
						<a href="#" data-aos="fade-up" class="btn btn-primary">ver más</a>
					</div>
					<div class="col-md-6 content">
						<h3 data-aos="fade-up">Distribuidores</h3>
						<p data-aos="fade-up">
							Formá parte de nuestro gran equipo y sumá a tu oferta la calidad y confiabilidad de un producto líder.
						</p>
						<a href="#" data-aos="fade-up" class="btn btn-primary">ver más</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Arquitectos & Distribuidores end -->

		<!-- Propiedades -->
		<section class="container-fluid propiedades">
			<div class="container">
				<div class="row">

					<div class="col-6 col-md-3">
						<div data-aos="fade-up" class="content_propiedades">
							<img class="img-fluid" src="./img/home/diseno-perfecto.gif" alt="diseño perfecto">
							<h3>Diseño <br>perfecto</h3>
						</div>
					</div>

					<div class="col-6 col-md-3">
						<div data-aos="fade-up" class="content_propiedades">
							<img class="img-fluid" src="./img/home/aislante-termico.gif" alt="aislante termico">
							<h3>Aislante <br>térmico</h3>
						</div>
					</div>

					<div class="col-6 col-md-3">
						<div data-aos="fade-up" class="content_propiedades">
							<img class="img-fluid" src="./img/home/aislante-acustico.gif" alt="aislante acustico">
							<h3>Aislante <br>acústico</h3>
						</div>
					</div>

					<div class="col-6 col-md-3">
						<div data-aos="fade-up" class="content_propiedades">
							<img class="img-fluid" src="./img/home/ahorro-energetico.gif" alt="ahorro energetico">
							<h3>Ahorro <br>energético</h3>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Propiedades end -->

		<!-- Módulo Contacto -->
		<section class="container-fluid modulo_contacto">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<!-- Mensages -->
						<?php include_once('./includes/msg.php'); ?>

						<!-- Errors -->
						<?php include_once('./includes/errors.php'); ?>
					</div>

					<div data-aos="fade-up" class="col-md-9 formulario">
						<div class="content_formulario">
							<h3>¿Querés obtener más <br>información de <span>EWIG</span> o <br>tenés alguna pregunta?</h3>
							<!-- Formulario -->
							<?php include_once('./includes/parts/formulario.php'); ?>
						</div>
					</div>

					<div class="col-md-9">
						<div class="content_formulario">
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Módulo Contacto end -->

		<!-- Galería Productos -->
		<section class="container-fluid galeria_productos">
			<div class="row">

				<div class="col-md-6 img_small">
					
					<div class="row">

						<div class="col-4 col-md-4 content_small">
							<img 
								data-aos="fade-up"
								onclick="galleryHome(this);" 
								data-text="La calidad superior se percibe en la terminaciones perfectas." 
								data-number="01" 
								class="img-fluid transition" 
								src="./img/home/carrusel-producto/producto-a-small.jpg" 
								alt="producto a small">
							<p data-aos="fade-up" class="number">01</p>
						</div>

						<div class="col-4 col-md-4 content_small">
							<img 
								data-aos="fade-up"
								onclick="galleryHome(this);" 
								data-text="La calidad superior se percibe en la terminaciones perfectas. 02" 
								data-number="02"
								class="img-fluid transition" 
								src="./img/home/carrusel-producto/producto-b-small.jpg" 
								alt="producto b small">
							<p data-aos="fade-up" class="number">02</p>
						</div>

						<div class="col-4 col-md-4 content_small">
							<img 
								data-aos="fade-up"
								onclick="galleryHome(this);" 
								data-text="La calidad superior se percibe en la terminaciones erior se percibe en la terminacione perfectas. 03" 
								data-number="03"
								class="img-fluid transition" 
								src="./img/home/carrusel-producto/producto-c-small.jpg" 
								alt="producto c small">
							<p data-aos="fade-up" class="number">03</p>
						</div>

						<div class="col-12">
							<div class="horizontal"></div>
						</div>

					</div>

					<div class="col-md-12">
						<div class="content_description">
							<div id="number_text" class="number_description">01</div>
							<p id="img_text" class="description">La calidad superior se percibe en la terminaciones perfectas.</p>
						</div>
					</div>

				</div>

				<div class="col-md-6 img_small">
					<img
						data-aos="fade-up" 
						id="expandedImg" 
						class="img-fluid transition" 
						src="./img/home/carrusel-producto/producto-a-large.jpg" 
						alt="producto a large">
				</div>

			</div>
		</section>
		<!-- Galería Productos end -->

		<!-- Info -->
		<section class="container-fluid info">
			<div class="container">
				<div class="row">

					<div class="col-md-7 frase">
						<p data-aos="fade-up">
							Las ventanas <span>EWIG</span> son fabricadas bajo estríctos <br>
							controles de calidad, libres de plomo, conviertiendose <br>
							en un producto <span>ecoamigable</span>, cuidando tanto a los <br>
							ususarios como al planeta, otra ventaja imprescindible <br>
							a la hora de encarar una nueva obra.
						</p>
					</div>

					<div data-aos="fade-up" class="col-md-5 flores"></div>

				</div>
			</div>
		</section>
		<!-- Info end -->

		<!-- Info Adicional -->
		<section class="container-fluid info_adicional">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-4 offset-md-3 offset-lg-4">
					<p data-aos="fade-up">
						Nuestros productos se someten a pruebas internas y de terceros. Se prueban en cuanto a resistencia al impacto, color, brillo, dimensiones, capacidad de soldadura y otros factores críticos. 
					</p>
					<p data-aos="fade-up" class="featured">Esto asegura un rendimiento inigualable y una durabilidad increíble.</p>
				</div>
			</div>
		</section>
		<!-- Info Adicional end -->

	</section>
	<!-- Contenido HOME end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="./dist/bundle.js"></script>

</body>

</html>