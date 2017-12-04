<div class="col-md-6">
	{if isset($clientes) && count($clientes)}
		<h2>Lista de Clientes</h2>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
			{foreach from=$clientes item=c}
				<tr>
					<td><a href="{$_layoutParams.root}clientes/view/{$c.id}" class="btn btn-link btn-sm">{$c.nombre}</a></td>
					<td>
						<a href="{$_layoutParams.root}clientes/edit/{$c.id}" class="btn btn-link btn-sm">Editar</a>
						<a href="{$_layoutParams.root}clientes/delete/{$c.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}clientes/delete/{$c.id}', '{$c.nombre}')">Eliminar</a>
					</td>
				</tr>
			{/foreach}
		</table>
	{else}
		<strong>No hay clientes registrados</strong>
	{/if}
	<p><a href="{$_layoutParams.root}clientes/add" class="btn btn-link">Nuevo Cliente</a></p>
</div>