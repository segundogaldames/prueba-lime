<div class="col-md-6">
	<h2>Editar Agendamiento</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Ejecutivo</label>
			<select name="ejecutivo" class="form-control">
				<option value="{$dato.ejecutivo_id}">{$dato.ejecutivo}</option>
				{if isset($ejecutivos) && count($ejecutivos)}
					{foreach from=$ejecutivos item=ej}
						<option value="{$ej.id}">{$ej.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label>Contacto: {$dato.contacto}</label>
		</div>
		<div class="form-group">
			<label>Fecha Agendada</label>
			<input type="date" name="fecha" value="{$dato.fecha_agenda}" class="form-control">
		</div>
		<div class="form-group">
			<label>Hora Agendada</label>
			<input type="time" name="hora" value="{$dato.hora_agenda}" class="form-control">
		</div>
		<div class="form-group">
			<label>Encuesta: {ucwords($dato.encuesta)}</label>
		</div>
		<div class="form-group">
			<label>Status</label>
			<select name="status" class="form-control">
				<option value="{$dato.status}">{if $dato.status==1}Pendiente{else}Contactado{/if}</option>
				<option value="1">Contactado</option>
				<option value="2">Pendiente</option>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}agendamientoscontactos" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>