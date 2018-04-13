<div class="col-md-6">
	<h2>Editar Lista</h2>
	<p class="text-warning">Recuerda que al editar esta lista, cambiarás el estado de los contactos asociados</p>
	<form action="" method="post">
		<div class="form-group">
			<label>Lista N° {$dato.id}</label>
		</div>
		<div class="form-group">
			<label>Estado:</label>
			<select name="estado" class="form-control">
				<option value="{$dato.estado}">{if $dato.estado==1}Activa{else}No Activa{/if}</option>
				<option value="1">Activar</option>
				<option value="2">Desactivar</option>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">
			<a href="{$_layoutParams.root}cargas/view/{$dato.id}" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>