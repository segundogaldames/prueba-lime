<div class="col-md-6">
	<h2>Ver Criterio</h2>
	<p><strong>Nombre:</strong> {ucwords($criterio.nombre)}</p>
	<p><strong>Encuesta:</strong> {ucwords($criterio.encuesta)}</p>
	<p><strong>Creado:</strong> {$criterio.creado|date_format:"%d-%m-%Y %H:%M"}</p>
	<p><strong>Creado:</strong> {$criterio.modificado|date_format:"%d-%m-%Y %H:%M"}</p>
	<p>
		<a href="{$_layoutParams.root}criterios/edit/{$criterio.id}" class="btn btn-link">Editar</a>
		<a href="{$_layoutParams.root}criterios/delete/{$criterio.id}" class="btn btn-link" onclick="return eliminar('{$_layoutParams.root}criterios/delete/{$criterio.id}', '{$criterio.nombre}')">Eliminar</a>
		<a href="{$_layoutParams.root}encuestas/encuestasSupervisores" class="btn btn-link">Encuestas</a>
	</p>

	<hr>
	<!--lista de cargas asociadas-->
	<h4>Listas de Contacto Asociadas</h4>
	{if isset($listas) && count($listas)}
		<ul type="square">
			{foreach from=$listas item=l}
				<li><a href="{$_layoutParams.root}cargas/view/{$l.id}">Lista {$l.id}</a></li>
			{/foreach}
		</ul>
		
	{else}
		<strong>No hay listas asociadas</strong>
	{/if}
	<p><a href="{$_layoutParams.root}contactos/addContactosEncuestaCriterio/{$criterio.encuesta_id}/{$criterio.id}" class="btn btn-link">Cargar Contactos</a></p>

	<!--Cuota Asociada-->
	{if isset($cuota) && count($cuota)}
		<h4>Cuota Asociada</h4>
		<div class="col-md-4">
			<table class="table table-hover table-bordered">
				<tr>
					<th>Desde</th>
					<th>Hasta</th>
					<th>Valor</th>
				</tr>
				<tr>
					<td>{$cuota.desde|date_format:"%d-%m-%Y"}</td>
					<td>{$cuota.hasta|date_format:"%d-%m-%Y"}</td>
					<td>{$cuota.valor}</td>
				</tr>
			</table>
		</div>
		<p><a href="{$_layoutParams.root}cuotas/edit/{$criterio.encuesta_id}/{$criterio.id}" class="btn btn-link">Modificar</a></p>
	{else}
		<p><a href="{$_layoutParams.root}cuotas/add/{$criterio.encuesta_id}/{$criterio.id}" class="btn btn-link">Agregar Cuota</a></p>
	{/if}
	
</div>