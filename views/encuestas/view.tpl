<div class="col-md-12">
	<h2>Ver encuesta: {$encuesta.nombre}</h2>
	<p><strong>Link:</strong> {$encuesta.link}</p>
	<p><strong>Status:</strong> {if $encuesta.status==1}Activa{else}No activa{/if}</p>
	<p><strong>Campaña:</strong> {$encuesta.campaign}</p>
	<p><strong>Tipo:</strong> {if $encuesta.tipo==1}Encuesta{else}Auditoría{/if}</p>
	<p><strong>Creado:</strong> {$encuesta.creado|date_format:"%d-%m-%Y %H:%M"}</p>
	<p><strong>Modificado:</strong> {$encuesta.actualizado|date_format:"%d-%m-%Y %H:%M"}</p>
	
	<p>
		<a href="{$_layoutParams.root}encuestas/edit/{$encuesta.id}" class="btn btn-link btn-sm">Editar</a>
		{if Session::get('role_id')==1}
		<a href="{$_layoutParams.root}encuestas/delete/{$encuesta.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}encuestas/delete/{$encuesta.id}','{$encuesta.nombre}')">Eliminar</a>
		{/if}
		<a href="{$_layoutParams.root}encuestas" class="btn btn-link btn-sm">Encuestas</a>
		<a href="{$_layoutParams.root}contactos/contactoEncuesta/{$encuesta.id}" class="btn btn-link btn-sm">Ejecutar</a>
	</p>

	<hr>
	<!--lista de criterios asociados-->
	<h4>Criterios Asociados</h4>
	{if isset($criterios) && count($criterios)}
		<ul type="square">
			{foreach from=$criterios item=cr}
				<li><a href="{$_layoutParams.root}criterios/view/{$cr.id}">{ucwords($cr.nombre)}</a></li>
			{/foreach}
		</ul>
	{else}
		<strong>No hay criterios asociados</strong>
	{/if}
	<p><a href="{$_layoutParams.root}criterios/addCriterioEncuesta/{$encuesta.id}" class="btn btn-link">Crear Criterio</a></p>
	<hr>
	
	<!--Lista los usuarios asociados a una encuesta y permite asociar usuarios-->
	<!--<h4>Ejecutivos asociados</h4>
	{if isset($usuarios) && count($usuarios)}
		<ul type="square"></ul>
			{foreach from=$usuarios item=u}
				<li><a href="{$_layoutParams.root}usuarios/view/{$u.id}" class="btn btn-link btn-sm">{$u.usuario}</a></li>
			{/foreach}
	{else}
		<strong>No hay ejecutivos asociados</strong>
	{/if}
	<p><a href="{$_layoutParams.root}encuestasusuarios/addUsuarioEncuesta/{$encuesta.id}" class="btn btn-link">Asociar Usuarios</a></p>
	
	<hr>-->

	<!--Lista de cargas realizadas asociadas a un usuario-->
	<!--<h4>Listas de Contactos Asociados</h4>
	{if isset($cargas) && count($cargas)}
		<ul type="square">
			{foreach from=$cargas item=car}
				<li><a href="{$_layoutParams.root}cargas/view/{$car.id}" class="btn btn-link">Carga {$car.id}</a></li>
			{/foreach}
		</ul>
	{else}
		<strong>No hay listas de contactos cargadas</strong>
	{/if}
	<p><a href="{$_layoutParams.root}contactos/addContactosEncuesta/{$encuesta.id}" class="btn btn-link">Cargar Contactos</a></p>

</div>-->