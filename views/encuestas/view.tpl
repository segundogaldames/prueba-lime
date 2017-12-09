<div class="col-md-12">
	<h2>Ver encuesta: {$encuesta.nombre}</h2>
	<p><strong>Link:</strong> {$encuesta.link}</p>
	<p><strong>Status:</strong> {if $encuesta.status==1}Activa{else}No activa{/if}</p>
	
	<p>
		<a href="{$_layoutParams.root}encuestas/edit/{$encuesta.id}" class="btn btn-link btn-sm">Editar</a>
		<a href="{$_layoutParams.root}encuestas" class="btn btn-link btn-sm">Encuestas</a>
	</p>
	<hr>
	{if isset($usuarios) && count($usuarios)}
		<h4>Usuarios asociados</h4>
		<ul type="square"></ul>
			{foreach from=$usuarios item=u}
				<li><a href="{$_layoutParams.root}usuarios/view/{$u.id}" class="btn btn-link btn-sm">{$u.nombre}</a></li>
			{/foreach}
	{else}
		<strong>No hay usuarios asociados</strong>
	{/if}
	<p><a href="{$_layoutParams.root}encuestasusuarios/add" class="btn btn-link">Asociar Usuarios</a></p>
</div>