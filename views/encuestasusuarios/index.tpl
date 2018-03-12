<div class="col-md-12">
	{if isset($encuestasUsuarios) && count(encuestasUsuarios)}
		<h2>Encuestas y Usuarios</h2>
		<table class="table table-hover">
			<tr>
				<th>Encuesta</th>
				<th>Usuario</th>
				<th>Acciones</th>
			</tr>
			{foreach from=$encuestasUsuarios item=eu}
				<tr>
					<td>
						<a href="{$_layoutParams.root}encuestas/view/{$eu.encuesta_id}" class="btn btn-link btn-sm">{$eu.encuesta}</a>
					</td>
					<td>
						<a href="{$_layoutParams.root}usuarios/view/{$eu.usuario_id}" class="btn btn-link btn-sm">{$eu.usuario}</a>
					</td>
					<td>
						<a href="{$_layoutParams.root}encuestasusuarios/edit/{$eu.usuario_id}" class="btn btn-link btn-sm">Editar</a>
						<a href="{$_layoutParams.root}encuestasusuarios/delete/{$eu.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}encuestasusuarios/delete/{$eu.usuario_id', 'la asociación {$eu.encuesta} - {$eu.usuario}')">Eliminar</a>
					</td>
				</tr>
			{/foreach}		
		</table>
	{else}
		<strong>No hay asociaciones generadas</strong>
	{/if}
	<p><a href="{$_layoutParams.root}encuestasusuarios/add" class="btn btn-link">Nueva Asociación</a></p>
</div>