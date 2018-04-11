<div class="col-md-6">
	<h3>Cambiar Contraseña</h3>
	<form action="" method="post">
		<div class="form-group">
			<label>Clave<span class="text-danger">*</span></label>
			<input type="password" name="clave" class="form-control">
		</div>
		<div class="form-group">
			<label>Reingresar clave</label>
			<input type="password" name="reclave" class="form-control">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}usuarios/view/{$usuario}" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>