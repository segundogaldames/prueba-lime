<div class="col-md-6">
	<h2>Nuevo Estado de Contacto</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre:<span class="text-danger">*</span></label>
			<input type="text" name="nombre" placeholder="Nombre de Estado de Contacto" class="form-control">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" name="" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}index" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>