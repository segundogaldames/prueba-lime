<div class="col-md-6">
	<h2>Editar Cliente</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="nombre" class="form-control" value="{$dato.nombre|default:""}">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}clientes" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>
