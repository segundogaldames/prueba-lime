<div class="col-md-2"></div>
<div class="col-md-10">
	<h2>Estado de Llamadas</h2>
	{if isset($estado_llamadas) && count($estado_llamadas)}
		
			<table class="table table-hover">
				<tr>
					<th>Nombre</th>
					<th>Acciones</th>
				</tr>
				{foreach from=$estado_llamadas item=ell}
				<tr>
					<td>{$ell.nombre}</td>
					<td>
						<a href="{$_layoutParams.root}estadollamadas/view/{$ell.id}" class="btn btn-link btn-sm">Editar</a>
						<a href="{$_layoutParams.root}estadollamadas/delete/{$ell.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}estadollamadas/delete/{$ell.id}', '{$ell.nombre}')">Eliminar</a>
					</td>
				</tr>
				{/foreach}
			</table>
		
	{else}
		<p class="text-info">No hay estado de llamadas registradas</p>
	{/if}
	<p><a href="{$_layoutParams.root}estadollamadas/add" class="btn btn-link">Agregar Estado Llamadas</a></p>
</div>