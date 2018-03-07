<div class="col-md-12">
	<h2>Ver Usuario</h2>
	<p><strong>Nombre:</strong> {$usuario.nombre}</p>
	<p><strong>Email:</strong> {$usuario.email}</p>
	<p><strong>Creado:</strong> {$usuario.creado|date_format:"%d-%m-%Y %H:%M"}</p>
	<p><strong>Actualizado:</strong> {$usuario.actualizado|date_format:"%d-%m-%Y %H:%M"}</p>
	<p><strong>Rol:</strong> {$usuario.role}</p>
	<p>
		<a href="{$_layoutParams.root}usuarios/edit/{$usuario.id}" class="btn btn-link btn-sm">Editar</a>
		{if Session::get('role_id') == 1}
		<a href="{$_layoutParams.root}usuarios/delete/{$usuario.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}usuarios/delete/{$usuario.id}','{$u.nombre}')">Eliminar</a>

		<a href="{$_layoutParams.root}usuarios" class="btn btn-link btn-sm">Usuarios</a>
		{/if}
		<a href="{$_layoutParams.root}usuarios/ejecutivos" class="btn btn-link btn-sm">Ejecutivos</a>
	</p>
	<hr>
	{if isset($usuarioEncuesta) && count($usuarioEncuesta)}
		<h4>Encuestas Asociadas</h4>
		<ul type="square">
			{foreach from=$usuarioEncuesta item=ue}
				<li>
					<a href="{$_layoutParams.root}encuestasusuarios/view/{$ue.id}">{$ue.nombre}</a>
				</li>
			{/foreach}
		</ul>
	{else}
		<strong>No hay encuestas asociadas</strong>
	{/if}
</div>