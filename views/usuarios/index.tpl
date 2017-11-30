<div class="col-md-12">
	{if isset($usuarios) && count($usuarios)}
		<h2>Lista de Usuarios</h2>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>Creado</th>
				<th>Actualizado</th>
				<th>Acciones</th>
			</tr>
			{foreach from=$usuarios item=u}
				<tr>
					<td>{$u.nombre}</td>
					<td>{$u.email}</td>
					<td>{$u.role}</td>
					<td>{$u.creado|date_format:"%d-%m-%Y %H:%M"}</td>
					<td>{$u.actualizado|date_format:"%d-%m-%Y %H:%M"}</td>
					<td>
						<a href="{$_layoutParams.root}usuarios/edit/{$u.id}" class="btn btn-link btn-sm">Editar</a>
						<a href="{$_layoutParams.root}usuarios/delete/{$u.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}usuarios/delete/{$u.id}', '{$u.nombre}')">Eliminar</a>
					</td>
				</tr>
			{/foreach}
		</table>
	{else}
		<strong>No hay usuarios registrados</strong>
	{/if}
	<p><a href="{$_layoutParams.root}usuarios/add" class="btn btn-link">Nuevo Usuario</a></p>
</div>