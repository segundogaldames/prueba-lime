<div class="col-md-6">
	<h2>Ver Criterio</h2>
	<p><strong>Nombre:</strong> {ucwords($criterio.nombre)}</p>
	<p><strong>Encuesta:</strong> {ucwords($criterio.encuesta)}</p>
	<p><strong>Creado:</strong> {$criterio.creado|date_format:"%d-%m-%Y %H:%M"}</p>
	<p><strong>Creado:</strong> {$criterio.modificado|date_format:"%d-%m-%Y %H:%M"}</p>
	<p>
		<a href="{$_layoutParams.root}criterios/edit/{$criterio.id}" class="btn btn-link">Editar</a>
		<a href="{$_layoutParams.root}criterios/delete/{$criterio.id}" class="btn btn-link" onclick="return eliminar('{$_layoutParams.root}criterios/delete/{$criterio.id}', '{$criterio.nombre}')">Eliminar</a>
		<a href="{$_layoutParams.root}encuestas" class="btn btn-link">Encuestas</a>
	</p>

	<hr>
	<!--lista de ejecutivos asociados-->
	<h4>Ejecutivos Asociados</h4>
	{if isset($ejecutivos) && count($ejecutivos)}

	{else}
		<strong>No hay ejecutivos asociados</strong>
	{/if}
	<p><a href="{$_layoutParams.root}criteriosusuarios/addEjecutivoCriterio/{$criterio.id}" class="btn btn-link">Asociar Ejecutivos</a></p>

	<hr>
	<!--lista de cargas asociadas-->
	<h4>Listas de Contacto Asociadas</h4>
	{if isset($listas) && count($listas)}

	{else}
		<strong>No hay listas asociadas</strong>
	{/if}
	<p><a href="{$_layoutParams.root}contactos/addCargaCriterio/{$criterio.id}" class="btn btn-link">Cargar Contactos</a></p>
</div>