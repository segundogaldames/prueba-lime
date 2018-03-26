<div class="col-md-6">
	<h2>Asociar Encuestas y Usuarios</h2>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Encuesta</label>
			<select name="encuesta" class="form-control">
				<option value="">Seleccione</option>
				{if isset($encuestas) && count($encuestas)}
					{foreach from=$encuestas item=e}
						<option value="{$e.id}">{$e.nombre}</option>
					{/foreach}
				{/if}				
			</select>
		</div>
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
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}encuestasusuarios" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>