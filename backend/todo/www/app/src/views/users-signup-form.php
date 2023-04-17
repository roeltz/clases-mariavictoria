<form method="post" action="signup">
	<header>
		<h1>Registro de usuario</h1>
	</header>
	<div class="field">
		<label>Nombre</label>
		<input type="text" name="name" required maxlength="100" value="<?php echo @$name ?>">
	</div>
	<div class="field">
		<label>E-mail</label>
		<input type="email" name="email" required maxlength="100" value="<?php echo @$email ?>">
	</div>
	<div class="field">
		<label>Contraseña</label>
		<input type="password" name="password" required>
	</div>
	<div class="field">
		<label>Confirmar contraseña</label>
		<input type="password" name="password2" required>
	</div>
	<footer>
		<?php if (isset($error)) : ?>
		<p><?php echo $error ?></p>
		<?php endif ?>
		<button>Registrarte</button>
	</footer>
</form>