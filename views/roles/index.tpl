<div class="col-md-6">
	{if isset($roles) && count($roles)}
		<h2>Lista de Roles</h2>
		<table class="table table-hover">
			<tr>
				<th>
					Nombre
				</th>
				<th>Acciones</th>
			</tr>
			{foreach from=$roles item=r}
				<tr>
					<td>{$r.nombre}</td>
					<td>
						<a href="{$_layoutParams.root}roles/edit/{$r.id}" class="btn btn-link btn-sm">Editar</a>
						<a href="{$_layoutParams.root}roles/delete/{$r.id}" onclick="return eliminar('{$_layoutParams.root}roles/delete/{$r.id}', '{$r.nombre}')" class="btn btn-link btn-sm">Eliminar</a>
					</td>
				</tr>
			{/foreach}
		</table>
	{else}
		<strong>No hay roles registrados</strong>
		
	{/if}
	<hr>
	<p><a href="{$_layoutParams.root}roles/add" class="btn btn-link">Agregar Roles</a></p>
</div>