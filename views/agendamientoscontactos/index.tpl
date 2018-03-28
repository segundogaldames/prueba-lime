<div class="col-md-12">
	<h2>Agendamientos</h2>
	{if isset($agendamientos) && count($agendamientos)}
		<table class="table table-hover table-responsive">
			<tr>
				<th>Fecha Agendada</th>
				<th>Hora Agendada</th>
				<th>Contacto</th>
				<th>Ejecutivo</th>
				<th>Encuesta</th>
				<th>Creado</th>
				<th>Último Estado</th>
				<th>Fecha Último Contacto</th>
				<th>Estado</th>
				<th>Acciones</th>
			</tr>
			{foreach from=$agendamientos item=ag}
				<tr>
					<td>{$ag.fecha_agenda|date_format:"%d-%m-%Y"}</td>
					<td>{$ag.hora_agenda}</td>
					<td><a href="{$_layoutParams.root}contactos/view/{$ag.contacto_id}" class="btn btn-link btn-sm">{ucwords($ag.contacto)}</a></td>
					<td>{ucwords($ag.ejecutivo)}</td>
					<td>{ucwords($ag.encuesta)}</td>
					<td>{$ag.creado|date_format:"%d-%m-%Y %H:%M"}</td>
					<td>{$ag.llamada}</td>
					<td>{$ag.modificado|date_format:"%d-%m-%Y %H:%M"}</td>
					<td>{if $ag.status==1}Pendiente{else}Contactado{/if}</td>
					<td>
						<a href="{$_layoutParams.root}agendamientoscontactos/edit/{$ag.id}" class="btn btn-link btn-sm">Editar</a>
						<a href="{$_layoutParams.root}agendamientoscontactos/delete/{$ag.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}agendamientoscontactos/delete/{$ag.id}','agendamiento de {$ag.contacto}')">Eliminar</a>
					</td>
				</tr>
			{/foreach}
		</table>
	{else}
		<p class="text-info">No hay agendamientos registrados</p>
	{/if}
</div>