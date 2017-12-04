<div class="col-md-12">
	<h2>Ver Cliente</h2>
	<p><strong>Nombre:</strong> {$cliente.nombre}</p>

	<p>
		<a href="{$_layoutParams.root}clientes/edit/{$cliente.id}" class="btn btn-link btn-sm">Editar</a>
		<a href="{$_layoutParams.root}clientes" class="btn btn-link btn-sm">Clientes</a>
	</p>
	<hr>
	{if isset($campaign) && count($campaign)}
	<h4>Campañas Asociadas</h4>
		<ul type="square">
			{foreach from=$campaign item=ca}
				<li><a href="{$_layoutParams.root}campaign/view/{$ca.id}" class="btn btn-link btn-sm">{$ca.nombre}</a></li>
			{/foreach}
		</ul>
	{else}
		<strong>No hay campañas asociadas</strong>
		<p><a href="{$_layoutParams.root}campaign/add" class="btn btn-link btn-sm">Nueva Campaña</a></p>
	{/if}
	<hr>
	

</div>