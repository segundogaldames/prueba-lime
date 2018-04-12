<div class="col-md-6">
	<h2>Grabaciones</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Desde</label>
			<input type="date" name="desde" class="form-control">
		</div>
		<div class="form-group">
			<label>Hasta</label>
			<input type="date" name="hasta" class="form-control">
		</div>
		<div class="form-group">
			<label>Encuesta</label>
			<select name="encuesta" class="form-control">
				<option value="">Seleccione...</option>
				{if isset($encuestas) && count($encuestas)}
					{foreach from=$encuestas item=enc}
						<option value="{$enc.id}">{$enc.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label>Teléfono</label>
			<input type="text" name="telefono" class="form-control">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Buscar" class="btn btn-success">
			<a href="{$_layoutParams.root}index" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>