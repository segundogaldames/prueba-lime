<div class="col-md-6">
	<h2>Contactar</h2>
	{if isset($contacto) && count($contacto)}
		<table class="table table-hover">
			<tr>
				<th>Nombre:</th>
				<td>{$contacto.nombre}</td>
			</tr>
			<tr>
				<th>Teléfono:</th>
				<td>{$contacto.telefono}</td>
			</tr>
		</table>
		<hr>
		<form action="" method="post">
			<div class=	"form-group">
				<label>Estado de Contacto<span class="text-danger">*</span></label>
				<select name="contacto" class="form-control">
					<option value="">Seleccione</option>
					<option value="1">Disponible</option>
					<option value="2">Contactado</option>
				</select>
			</div>
			<div class="form-group">
				<label>Estado de la Llamada<span class="text-danger">*</span></label>
				<select name="llamada" class="form-control">
					<option value="">Seleccione</option>
					{if isset($estado_llamada) && count($estado_llamada)}
						{foreach from=$estado_llamada item=ell}
							<option value="{$ell.id}">{$ell.nombre}</option>	
						{/foreach}
					{/if}
				</select>
			</div>
			<div class="form-group">
				<input type="hidden" name="enviar" value="1">
				<input type="submit" value="Cambiar">
			</div>
		</form>
	{else}
		<p class="alert alert-info">No hay contactos disponibles</p>
	{/if}
	<a href="{$_layoutParams.root}contactos/cerrar">Cerrar</a>
</div>