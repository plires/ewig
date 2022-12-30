<form id="form-contacto" action="./php/validate-form.php" method="post" class="needs-validation" novalidate>

	<input name="origin" type="hidden" value="Formulario de Contacto">
	<input name="current" type="hidden" value="<?= $current_filename ?>">

	<input 
		class="form-control"
		required="required" 
		type="text" 
		name="name" 
		placeholder="nombre"
		value="<?= $name ?>">
	<div class="invalid-feedback">
    Ingresá tu nombre
  </div>

	<input 
		class="form-control"
		required="required" 
		type="email" 
		name="email" 
		placeholder="email"
		value="<?= $email ?>">
	<div class="invalid-feedback">
    Ingresá tu email
  </div>

	<input 
		class="form-control"
		required="required" 
		type="text" 
		name="phone" 
		placeholder="teléfono"
		value="<?= $phone ?>">
	<div class="invalid-feedback">
    Ingresá tu teléfono
  </div>

	<textarea class="form-control" placeholder="consulta" required="required" name="comments"><?= $comments ?></textarea>
	<div class="invalid-feedback">
    Ingresá tu consulta
  </div>

	<div class="content_button">
		<button type="button" id="send" class="btn btn-primary">
			Enviar
			<div id="spinner" class="spinner-border spinner-border-sm" role="status">
			  <span class="visually-hidden"></span>
			</div>
		</button>
	</div>

</form>