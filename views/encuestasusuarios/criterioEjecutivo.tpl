<div class="col-md-6">
	<h2>Editar Criterio - Ejecutivo</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Encuesta: {ucwords($dato.encuesta)}</label>
		</div>
		<div class="form-group">
			<label>Ejecutivo: {ucwords($dato.usuario)}</label>
		</div>
		<div class="form-group">
			<label>Criterio</label>
			<select name="criterio" class="form-control">
				<option value="{$dato.criterio_id}">{if isset($dato.criterio)}{$dato.criterio}{else}Sin Criterio{/if}</option>
				{if isset($criterios) && count($criterios)}
					{foreach from=$criterios item=cr}
						<option value="{$cr.id}">{$cr.nombre}</option>
					{/foreach}
				{/if}
				<option value="">Sin Criterio</option>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}encuestas/view/{$dato.encuesta_id}" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>