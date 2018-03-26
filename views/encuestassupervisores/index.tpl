<div class="col-md-8">
	<h2>Encuestas y Supervisores</h2>
	{if isset($supervisores) && count($supervisores)}
	<table class="table table-hover">
		<tr>
			<th>Encuesta</th>
			<th>Supervisor</th>
			<th>Acciones</th>
		</tr>
		{foreach from=$supervisores item=sup}
			<tr>
				<td><a href="{$_layoutParams.root}encuestas/view/{$sup.encuesta_id}">{$sup.encuesta}</a></td>
				<td><a href="{$_layoutParams.root}usuarios/view/{$sup.supervisor_id}">{$sup.supervisor}</a></td>
				<td>
					<a href="{$_layoutParams.root}encuestassupervisores/delete/{$sup.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}encuestassupervisores/delete/{$sup.id}','{$sup.encuesta} y {$sup.supervisor}')">Eliminar</a>
				</td>
			</tr>
		{/foreach}
	</table>
	{else}
		<p class="text-info">No hay asociación de encuestas y supervisores</p>
		<p class="text-info">Debe seleccionar una encuesta para iniciar la asociación</p>
	{/if}
</div>