<div class="col-md-12">
	<h2>Ver Campaña</h2>
	<p><strong>Nombre:</strong> {$campaign.nombre}</p>
	<p><strong>Cliente:</strong> {$campaign.cliente}</p>
	<p><strong>Campaña ViciDial:</strong> {$campaign.vici}</p>

	<p>
		<a href="{$_layoutParams.root}campaign/edit/{$campaign.id}" class="btn btn-link btn-sm">Editar</a>
		{if Session::get('role_id')==1}
		<a href="{$_layoutParams.root}campaign/delete/{$campaign.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}campaign/delete/{$campaign.id}', '{$campaign.nombre}')">Eliminar</a>
		{/if}
		<a href="{$_layoutParams.root}campaign" class="btn btn-link btn-sm">Campañas</a>
	</p>
	<hr>
	{if isset($encuestas) && count($encuestas)}
		<h4>Encuestas Asociadas</h4>
		<ul type="square">
			{foreach from=$encuestas item=e}
				<li><a href="{$_layoutParams.root}encuestas/view/{$e.id}">{$e.nombre}</a></li>
			{/foreach}
		</ul>
	{else}
		<strong>No hay encuestas asociadas o activas</strong>
	{/if}
		<p><a href="{$_layoutParams.root}encuestas/addEncuestaCampaign/{$campaign.id}" class="btn btn-link btn-sm">Nueva Encuesta</a></p>

</div>