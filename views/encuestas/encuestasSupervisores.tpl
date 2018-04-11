<div class="col-md-12">
	{if isset($encuestas) && count($encuestas)}
		<h2>Lista de Encuestas</h2>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Status</th>
				<th>Campaña</th>
				<th>Tipo</th>
				<th>Creado</th>
				<th>Actualizado</th>
			</tr>
			{foreach from=$encuestas item=e}
				<tr>
					<td><a href="{$_layoutParams.root}encuestas/view/{$e.encuesta_id}" class="btn btn-link btn-sm">{$e.encuesta}</a>
					</td>
					<td>{if $e.status==1}Activa{else}No activa{/if}</td>
					<td><a href="{$_layoutParams.root}campaign/view/{$e.campaign_id}" class="btn btn-link btn-sm">{$e.campaign}</a>
					</td>
					<td>{if $e.tipo == 1}Encuesta{else}Auditoria{/if}</td>
					<td>{$e.creado|date_format:"%d-%m-%Y %H:%M"}</td>
					<td>{$e.modificada|date_format:"%d-%m-%Y %H:%M"}</td>
				</tr>
			{/foreach}
		</table>
		{if isset($paginacion)}{$paginacion}{/if}
	{else}
		<p class="text-info">Usted no tiene encuestas a su cargo</p>
		<p class="text-info">Comuníquese con el Administrador del Sistema</p>
	{/if}
	<p>
		<a href="{$_layoutParams.root}index" class="btn btn-link">Volver</a>
	</p>
</div>