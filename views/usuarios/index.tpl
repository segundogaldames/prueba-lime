<div class="col-md-12">
	{if isset($usuarios) && count($usuarios)}
		<h2>Lista de Usuarios</h2>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>Rol</th>
				<th>Creado</th>
				<th>Actualizado</th>
			</tr>
			{foreach from=$usuarios item=u}
				<tr>
					<td><a href="{$_layoutParams.root}usuarios/view/{$u.id}">{$u.nombre}</a></td>
					<td>{$u.email}</td>
					<td>{$u.role}</td>
					<td>{$u.creado|date_format:"%d-%m-%Y %H:%M"}</td>
					<td>{$u.actualizado|date_format:"%d-%m-%Y %H:%M"}</td>
				</tr>
			{/foreach}
		</table>
	{else}
		<strong>No hay usuarios registrados</strong>
	{/if}
	<p>
		<a href="{$_layoutParams.root}usuarios/add" class="btn btn-link">Nuevo Usuario</a>
		<a href="{$_layoutParams.root}index" class="btn btn-link">Volver</a>
	</p>
</div>