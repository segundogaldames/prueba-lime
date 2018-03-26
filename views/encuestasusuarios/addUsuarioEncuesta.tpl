<div class="col-md-6">
	<h2>Asociar Encuestas y Usuarios</h2>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Usuario</label>
			<select name="usuario" class="form-control">
				<option value="">Seleccione</option>
				{if isset($ejecutivos) && count($ejecutivos)}
					{foreach from=$ejecutivos item=ej}
						<option value="{$ej.id}">{$ej.nombre}</option>
					{/foreach}
				{/if}				
			</select>
		</div>
		{if isset($criterios) && count($criterios)}
		<div class="form-group">
			<label>Criterios</label>
			<select name="criterio" class="form-control">
				<option value="">Seleccione</option>
					{foreach from=$criterios item=cr}
						<option value="{$cr.id}">{$cr.nombre}</option>
					{/foreach}
			</select>
		</div>
		{else}
			<p class="text-info">Esta encuesta no tiene criterios asociados</p>
			<p class="text-info">Este usuario podrá acceder a todos los contactos cargados en esta encuesta</p>
		{/if}
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}encuestas/view/{$encuesta.id}" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>