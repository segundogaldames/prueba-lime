<div class="col-md-6">
	<h2>Ver Lista</h2>
	<p><strong>Carga:</strong> {$carga.id}</p>
	<p><strong>Encuesta:</strong> {$carga.nombre}</p>
	<p><strong>Cargado Por:</strong> {$carga.usuario}</p>
	<p><strong>Fecha:</strong> {$carga.fecha}</p>
	<p><strong>Estado:</strong> {if $carga.estado==1}Activa{else}No Activa{/if}</p>
	
	<p>
		<a href="{$_layoutParams.root}contactos/contactosCarga/{$carga.id}" class="btn btn-link btn-sm">Ver Contactos</a>
		<a href="{$_layoutParams.root}cargas/edit/{$carga.id}" class="btn btn-link">Editar</a>
		{if Session::get('role_id') ==1}
		<a href="{$_layoutParams.root}cargas/delete/{$carga.id}" class="btn btn-link" onclick="return eliminar('{$_layoutParams.root}cargas/delete/{$carga.id}','la lista {$carga.id} y eliminar sus contactos')">Eliminar</a>
		{/if}
		<a href="{$_layoutParams.root}cargas" class="btn btn-link">Listas</a>
	</p>
</div>