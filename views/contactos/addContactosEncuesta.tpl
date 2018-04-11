<div class="col-md-6">
	<h2>Cargar Contactos</h2>
	<p>{if isset($encuesta)}<strong>Encuesta:</strong> {$encuesta.nombre}{/if}</p>
	<p>{if isset($criterio)}<strong>Criterio:</strong> {$criterio.nombre}{/if}</p>
	<hr>
	<form action="" method="post" enctype="multipart/form-data" class="form-inline">
		<input type="file" name="excel" class="form-control">
		<input type="hidden" name="enviar" value="{$enviar}">
		<input type="submit" value="Cargar" class="btn btn-success">
	</form>
</div>	