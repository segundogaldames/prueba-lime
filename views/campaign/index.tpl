<div class="col-md-10">
	{if isset($campaign) && count($campaign)}
	<h2>Lista de Campañas</h2>
	<table class="table table-hover">
		<tr>
			<th>Nombre</th>
			<th>Cliente</th>
			<th>Campaña ViciDial</th>
			<th>Acciones</th>
		</tr>
		{foreach from=$campaign item=c}
			<tr>
				<td><a href="{$_layoutParams.root}campaign/view/{$c.id}" class="btn btn-link btn-sm">{$c.nombre}</a></td>
				<td><a href="{$_layoutParams.root}clientes/view/{$c.cliente_id}" class="btn btn-link btn-sm">{$c.cliente}</a></td>
				<td>{$c.vici}</td>
				<td>
					<a href="{$_layoutParams.root}campaign/edit/{$c.id}" class="btn btn-link btn-sm">Editar</a>
					<a href="{$_layoutParams.root}campaign/delete/{$c.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}campaign/delete/{$c.id}', '{$c.nombre}')">Eliminar</a>
				</td>
			</tr>
		{/foreach}
	</table>
	{else}
		<strong>No hay campañas registradas</strong>
	{/if}
	<p><a href="{$_layoutParams.root}campaign/add" class="btn btn-link">Nueva Campaña</a></p>
</div>