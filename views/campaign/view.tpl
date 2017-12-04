<div class="col-md-12">
	<h2>Ver Campaña</h2>
	<p><strong>Nombre:</strong> {$campaign.nombre}</p>
	<p><strong>Cliente:</strong> {$campaign.cliente}</p>
	<p><strong>Campaña ViciDial:</strong> {$campaign.vici}</p>

	<p>
		<a href="{$_layoutParams.root}campaign/edit/{$campaign.id}" class="btn btn-link btn-sm">Editar</a>
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
		<p><a href="{$_layoutParams.root}encuestas/add" class="btn btn-link btn-sm">Nueva Encuesta</a></p>

</div>