<div class="col-md-6">
	<h2>Editar Contacto</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre: {$dato.nombre}</label>
		</div>
		<div class="form-group">
			<label>Teléfono: {$dato.telefono}</label>
		</div>
		<div class="form-group">
			<label>Encuesta: {$dato.nom_encuesta}</label>
		</div>
		<div class="form-group">
			<label>Estado de Llamada</label>
			<select name="llamada" class="form-control">
				<option value="{$dato.estado_llamada}">{$dato.llamada}</option>
				{if isset($e_llamada) && count($e_llamada)}
					{foreach from=$e_llamada item=ell}
						<option value="{$ell.id}">{$ell.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}contactos" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>