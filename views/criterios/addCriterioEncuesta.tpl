<div class="col-md-6">
	<h2>Nuevo Criterio Encuesta {$encuesta.nombre}</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre del criterio</label>
			<input type="text" name="nombre" placeholder="Nombre del criterio" class="form-control">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}encuestas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>