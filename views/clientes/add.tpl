<div class="col-md-6">
	<h2>Nuevo Cliente</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="nombre" class="form-control" value="{$datos.nombre|default:""}">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>
	</form>
</div>
