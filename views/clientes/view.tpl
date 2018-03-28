<div class="col-md-12">
	<h2>Ver Cliente</h2>
	<p><strong>Nombre:</strong> {$cliente.nombre}</p>
	<p><strong>Creado:</strong> {$cliente.creado|date_format:"%d-%m-%Y %H:%M"}</p>
	<p><strong>Modificado:</strong> {$cliente.modificado|date_format:"%d-%m-%Y %H:%M"}</p>

	<p>
		{if Session::get('role_id')==1}
		<a href="{$_layoutParams.root}clientes/edit/{$cliente.id}" class="btn btn-link btn-sm">Editar</a>
		<a href="{$_layoutParams.root}clientes/delete/{$cliente.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}clientes/delete/{$cliente.id}', '{$cliente.nombre}')">Eliminar</a>
		{/if}
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
		
	{/if}
	<p><a href="{$_layoutParams.root}campaign/add/{$cliente.id}" class="btn btn-link btn-sm">Nueva Campaña</a></p>
	<hr>
	

</div>