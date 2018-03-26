<div class="col-md-6">
	<h2>Editar Estado de Llamadas</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Estado de Llamada</label>
			<input type="text" name="nombre" class="form-control" placeholder="Estado de Llamada" value="{$dato.nombre|default:""}">
		</div>
		<div class="form-group">
			<label>Estado de Contacto</label>
			<select name="est_contacto" class="form-control">
				<option value="{$dato.estado_contacto}">{$dato.contacto}</option>
				{if isset($estado_contactos) && count($estado_contactos)}
					{foreach from=$estado_contactos item=ec}
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