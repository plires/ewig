<?php  ?>
<header class="container-fluid p-0">

	<div class="container">
		
		<div class="row">
			<div class="col-md-12 content">
				<a href="./">
					<img class="logo" src="./img/header/logo-ewig.png" alt="logo ewig">
				</a>
				<i id="btn_menu" class="fa-solid fa-bars"></i>
			</div>
		</div>

		<nav>
			<img class="logo_nav" src="./img/footer/logo-ewig-footer.png" alt="logo ewig nav">
			<ul>

				<li>
					<a class="<?=($current === 'home') ? 'active' : ''?>" href="./">Home</a>
				</li>

				<li class="<?=($current === 'productos') ? 'active' : ''?>" id="products">
					<span id="btn_menu_products" class="open">Productos<i id="arrow_product" class="fa-solid fa-angle-down"></i></span>
					<ul id="content_products">
						<li>
							<a class="<?=($product === 'new_elegans') ? 'open' : ''?>" href="./producto-new-elegans.php">NEW ELEGANS</a>
						</li>
						<li>
							<a class="<?=($product === 'sliding_7400') ? 'open' : ''?>" href="./producto-sliding-7400.php">SLIDING 7400</a>
						</li>
						<li>
							<a class="<?=($product === 'compact') ? 'open' : ''?>" href="./producto-compact.php">COMPACT</a>
						</li>	
						<li>
							<a class="<?=($product === 'inova') ? 'open' : ''?>" href="./producto-inova.php">INOVA</a>
						</li>
						<li>
							<a class="<?=($product === 'hebe_schiebe') ? 'open' : ''?>" href="./producto-hebe-schiebe.php">HEBE SCHIEBE</a>
						</li>
					</ul>
				</li>

				<li>
					<a class="<?=($current === 'empresa') ? 'active' : ''?>" href="./empresa.php">Empresa</a>
				</li>

				<li>
					<a class="<?=($current === 'distribuidores') ? 'active' : ''?>" href="./distribuidores.php">Distribuidores</a>
				</li>

				<li>
					<a class="<?=($current === 'arquitectos') ? 'active' : ''?>" href="./arquitectos.php">Arquitectos</a>
				</li>

				<!-- <li>
					<a class="<?=($current === 'blog') ? 'active' : ''?>" href="./">Blog</a>
				</li> -->

				<li>
					<a class="<?=($current === 'contacto') ? 'active' : ''?>" href="./contacto.php">Contacto</a>
				</li>

			</ul>
		</nav>

	</div>

</header>