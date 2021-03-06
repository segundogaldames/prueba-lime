<div class="col-md-12">
	{if isset($encuestas) && count($encuestas)}
		<h2>Lista de Encuestas</h2>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Status</th>
				<th>Campaña</th>
				<th>Código</th>
				<th>Creado</th>
				<th>Actualizado</th>
			</tr>
			{foreach from=$encuestas item=e}
				<tr>
					<td><a href="{$_layoutParams.root}encuestas/view/{$e.id}" class="btn btn-link btn-sm">{$e.nombre}</a>
					</td>
					<td>{if $e.status==1}Activa{else}No activa{/if}</td>
					<td><a href="{$_layoutParams.root}campaign/view/{$e.campaign_id}" class="btn btn-link btn-sm">{$e.campaign}</a>
					</td>
					<td>{$e.limesurvey_id}</td>
					<td>{$e.creado|date_format:"%d-%m-%Y %H:%M"}</td>
					<td>{$e.actualizado|date_format:"%d-%m-%Y %H:%M"}</td>
				</tr>
			{/foreach}
		</table>
		{if isset($paginacion)}{$paginacion}{/if}
	{else}
		<strong>No hay encuestas registradas</strong>
	{/if}
	<p>
		<a href="{$_layoutParams.root}encuestas/add" class="btn btn-link">Nueva Encuesta</a>
		<a href="{$_layoutParams.root}index" class="btn btn-link">Volver</a>
	</p>
</div>