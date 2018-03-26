<div class="col-md-6">
	<h2>Nuevo Estado de Llamadas</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Estado de Llamada</label>
			<input type="text" name="nombre" class="form-control" placeholder="Estado de Llamada">
		</div>
		<div class="form-group">
			<label>Estado de Contacto</label>
			<select name="est_contacto" class="form-control">
				<option value="">Seleccione</option>
				{if isset($estado_contacto) && count($estado_contacto)}
					{foreach from=$estado_contacto item=ec}
						<option value="{$ec.id}">{$ec.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}estadollamadas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>